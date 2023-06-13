<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sektor extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('status') <> 'login') {
      redirect(base_url('login'));
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['x1'] = 'Data sektor';
    $data['x2'] = 'Master';
    $data['x3'] = 'Sektor';
    $data['x4'] = 'Data Sektor ' . '| ' . $this->db->query('select nama_perush from tbl_perusahaan')->row()->nama_perush;
    $data['sektor'] = $this->Mglobal->tampilkandata('tbl_sektor');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/master/v_sektor');
    $this->load->view('admin/temp/v_footer');
  }
  function tambahsektor()
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'sektor';
    $data['x3'] = 'Tambah sektor Inventaris';
    $data['x4'] = 'Menambahkan Data sektor Inventaris Sahabat Optik';
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/sektor/vtambahsektor', $data);
    $this->load->view('adm/footer');
  }
  function aksitambahsektor()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_sektor', 'Nama sektor', 'required');
    //  $this->form_validation->set_rules('username_sektor', 'Username sektor', 'required');
    // $this->form_validation->set_rules('password_sektor', 'Password sektor', 'required');
    // if($this->form_validation->run()!=false)
    // {
    // $config['upload_path'] = './assets/toko/images/sektor/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_sektor_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_sektor')) {
    //   $image = $this->upload->data();
    $data = array(
      'nama_sektor' => $this->input->post('nama_sektor'),
      'kd_sektor' => $this->input->post('kd_sektor'),



      // 'ket_sektor' => $this->input->post('ket_sektor'),
      // 'foto_sektor' => $image['file_name'],
    );
    $this->Mglobal->tambahdata($data, 'tbl_sektor');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
    redirect(base_url('admin/master/sektor/'));
  }

  // else {
  //
  //  $this->load->view('sektor/temp/v_header');
  // $this->load->view('sektor/temp/v_atas');
  // $this->load->view('sektor/temp/v_sidebar');
  // $this->load->view('sektor/master/sektor/v_sektor');
  // $this->load->view('sektor/temp/v_footer');
  // }
  // }
  function hapussektor()
  {
    $where = array('kd_sektor' => $this->input->post('kd_sektor'));
    $this->Mglobal->hapusdata($where, 'tbl_sektor');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/sektor/'));
  }
  function editsektor($id)
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'sektor';
    $data['x3'] = 'Edit sektor Inventaris';
    $data['x4'] = 'Mengedit Data sektor Inventaris Sahabat Optik';
    $where = array('kd_sektor' => $id);
    $data['sektor'] = $this->Mglobal->tampilkandatasingle('tbl_sektor', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/sektor/veditsektor', $data);
    $this->load->view('adm/footer');
  }
  function aksieditsektor()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_sektor', 'Nama sektor', 'required');
    //  $this->form_validation->set_rules('username_sektor', 'Username sektor', 'required');
    //   $this->form_validation->set_rules('password_sektor', 'Password sektor', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    // $config['upload_path'] = './assets/toko/images/sektor/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_sektor_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_sektor')) {
    // $image = $this->upload->data();
    $where = array('kd_sektor' => $this->input->post('kd_sektor'));
    $data = array(
      'nama_sektor' => $this->input->post('nama_sektor'),


      // 'ket_sektor' => $this->input->post('ket_sektor'),
      // 'foto_sektor' => $image['file_name'],
      //  'password_sektor'=>md5($this->input->post('password_sektor'))
    );
    $this->Mglobal->editdata('tbl_sektor', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/sektor/'));
    //  }
    //  else {

    //    $this->load->view('adm/header');
    //    $this->load->view('adm/sidebar');
    //    $this->load->view('adm/master/sektor/vtambahsektor');
    //    $this->load->view('adm/footer');
    //  }
    // } else {
    //   $where = array('kd_sektor' => $this->input->post('kd_sektor'));
    //   $data = array(
    //     'nama_sektor' => $this->input->post('nama_sektor'),
    //     //'foto_sektor' => $image['file_name'],
    //     //  'password_sektor'=>md5($this->input->post('password_sektor'))
    //   );
    //   $this->Mglobal->editdata('tbl_sektor', $where, $data);
    //   $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //           <span aria-hidden="true">&times;</span>
    //         </button>
    //       </div>');
    //   redirect(base_url('admin/master/sektor/'));
    // }
  }
}
