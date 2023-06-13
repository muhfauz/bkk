<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
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
    $data['x1'] = 'Data pendidikan';
    $data['x2'] = 'Master';
    $data['x3'] = 'pendidikan';
    $data['x4'] = 'Data pendidikan ' . '| ' . $this->db->query('select nama_perush from tbl_perusahaan')->row()->nama_perush;
    $data['pendidikan'] = $this->Mglobal->tampilkandata('tbl_pendidikan');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/master/v_pendidikan');
    $this->load->view('admin/temp/v_footer');
  }
  function tambahpendidikan()
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'pendidikan';
    $data['x3'] = 'Tambah pendidikan Inventaris';
    $data['x4'] = 'Menambahkan Data pendidikan Inventaris Sahabat Optik';
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/pendidikan/vtambahpendidikan', $data);
    $this->load->view('adm/footer');
  }
  function aksitambahpendidikan()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_pendidikan', 'Nama pendidikan', 'required');
    //  $this->form_validation->set_rules('username_pendidikan', 'Username pendidikan', 'required');
    // $this->form_validation->set_rules('password_pendidikan', 'Password pendidikan', 'required');
    // if($this->form_validation->run()!=false)
    // {
    // $config['upload_path'] = './assets/toko/images/pendidikan/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_pendidikan_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_pendidikan')) {
    //   $image = $this->upload->data();
    $data = array(
      'nama_pendidikan' => $this->input->post('nama_pendidikan'),
      'kd_pendidikan' => $this->input->post('kd_pendidikan'),



      // 'ket_pendidikan' => $this->input->post('ket_pendidikan'),
      // 'foto_pendidikan' => $image['file_name'],
    );
    $this->Mglobal->tambahdata($data, 'tbl_pendidikan');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
    redirect(base_url('admin/master/pendidikan/'));
  }

  // else {
  //
  //  $this->load->view('pendidikan/temp/v_header');
  // $this->load->view('pendidikan/temp/v_atas');
  // $this->load->view('pendidikan/temp/v_sidebar');
  // $this->load->view('pendidikan/master/pendidikan/v_pendidikan');
  // $this->load->view('pendidikan/temp/v_footer');
  // }
  // }
  function hapuspendidikan()
  {
    $where = array('kd_pendidikan' => $this->input->post('kd_pendidikan'));
    $this->Mglobal->hapusdata($where, 'tbl_pendidikan');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/pendidikan/'));
  }
  function editpendidikan($id)
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'pendidikan';
    $data['x3'] = 'Edit pendidikan Inventaris';
    $data['x4'] = 'Mengedit Data pendidikan Inventaris Sahabat Optik';
    $where = array('kd_pendidikan' => $id);
    $data['pendidikan'] = $this->Mglobal->tampilkandatasingle('tbl_pendidikan', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/pendidikan/veditpendidikan', $data);
    $this->load->view('adm/footer');
  }
  function aksieditpendidikan()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_pendidikan', 'Nama pendidikan', 'required');
    //  $this->form_validation->set_rules('username_pendidikan', 'Username pendidikan', 'required');
    //   $this->form_validation->set_rules('password_pendidikan', 'Password pendidikan', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    // $config['upload_path'] = './assets/toko/images/pendidikan/';
    // $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    // $config['max_size'] = '2048';
    // $config['file_name'] = 'foto_pendidikan_' . time();
    // $this->load->library('upload', $config);
    // if ($this->upload->do_upload('foto_pendidikan')) {
    // $image = $this->upload->data();
    $where = array('kd_pendidikan' => $this->input->post('kd_pendidikan'));
    $data = array(
      'nama_pendidikan' => $this->input->post('nama_pendidikan'),


      // 'ket_pendidikan' => $this->input->post('ket_pendidikan'),
      // 'foto_pendidikan' => $image['file_name'],
      //  'password_pendidikan'=>md5($this->input->post('password_pendidikan'))
    );
    $this->Mglobal->editdata('tbl_pendidikan', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/pendidikan/'));
    //  }
    //  else {

    //    $this->load->view('adm/header');
    //    $this->load->view('adm/sidebar');
    //    $this->load->view('adm/master/pendidikan/vtambahpendidikan');
    //    $this->load->view('adm/footer');
    //  }
    // } else {
    //   $where = array('kd_pendidikan' => $this->input->post('kd_pendidikan'));
    //   $data = array(
    //     'nama_pendidikan' => $this->input->post('nama_pendidikan'),
    //     //'foto_pendidikan' => $image['file_name'],
    //     //  'password_pendidikan'=>md5($this->input->post('password_pendidikan'))
    //   );
    //   $this->Mglobal->editdata('tbl_pendidikan', $where, $data);
    //   $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //           <span aria-hidden="true">&times;</span>
    //         </button>
    //       </div>');
    //   redirect(base_url('admin/master/pendidikan/'));
    // }
  }
}
