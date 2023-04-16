<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
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
    $data['x1'] = 'Data Perusahaan';
    $data['x2'] = 'Master';
    $data['x3'] = 'Perusahaan';
    $data['x4'] = 'Data Perusahaan ' . '| ' . $this->db->query('select nama_bkk from tbl_bkk')->row()->nama_bkk;
    $data['perusahaan'] = $this->db->query("select * from tbl_perusahaan")->result();
    // $data['jabatan'] = $this->Mglobal->tampilkandata('tbl_jabatan');
    // $data['bagian'] = $this->Mglobal->tampilkandata('tbl_bagian');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/master/v_perusahaan');
    $this->load->view('admin/temp/v_footer');
  }

  function aksitambahperusahaan()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_karyawan', 'Nama karyawan', 'required');
    //  $this->form_validation->set_rules('username_karyawan', 'Username karyawan', 'required');
    // $this->form_validation->set_rules('password_karyawan', 'Password karyawan', 'required');
    // if($this->form_validation->run()!=false)
    // {
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    $config['max_size'] = '2048';
    $config['file_name'] = 'logo_perush' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('logo_perush')) {
      $image = $this->upload->data();
      $data = array(
        'nama_perush' => $this->input->post('nama_perush'),
        'kd_perush' => $this->input->post('kd_perush'),
        'logo_perush' => $image['file_name'],





        // 'ket_karyawan' => $this->input->post('ket_karyawan'),
        // 'foto_karyawan' => $image['file_name'],
      );
      $this->Mglobal->tambahdata($data, 'tbl_perush');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect(base_url('admin/master/perusahaan/'));
    } else {
      $data = array(
        'nama_perush' => $this->input->post('nama_perush'),
        'kd_perush' => $this->input->post('kd_perush'),
        'logo_perush' => 'foto_karyawan.png',


      );
      $this->Mglobal->tambahdata($data, 'tbl_perusahaan');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect(base_url('admin/master/perusahaan/'));
    }
  }

  // else {
  //
  //  $this->load->view('karyawan/temp/v_header');
  // $this->load->view('karyawan/temp/v_atas');
  // $this->load->view('karyawan/temp/v_sidebar');
  // $this->load->view('karyawan/master/karyawan/v_karyawan');
  // $this->load->view('karyawan/temp/v_footer');
  // }
  // }
  function hapuskaryawan()
  {
    $where = array('kd_karyawan' => $this->input->post('kd_karyawan'));
    $this->Mglobal->hapusdata($where, 'tbl_karyawan');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/karyawan/'));
  }
  function editkaryawan($id)
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'karyawan';
    $data['x3'] = 'Edit karyawan Inventaris';
    $data['x4'] = 'Mengedit Data karyawan Inventaris Sahabat Optik';
    $where = array('kd_karyawan' => $id);
    $data['karyawan'] = $this->Mglobal->tampilkandatasingle('tbl_karyawan', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/karyawan/veditkaryawan', $data);
    $this->load->view('adm/footer');
  }
  function aksieditkaryawan()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_karyawan', 'Nama karyawan', 'required');
    //  $this->form_validation->set_rules('username_karyawan', 'Username karyawan', 'required');
    //   $this->form_validation->set_rules('password_karyawan', 'Password karyawan', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    $config['max_size'] = '2048';
    $config['file_name'] = 'gambar_karyawan_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('foto_karyawan')) {
      $image = $this->upload->data();
      $where = array('kd_karyawan' => $this->input->post('kd_karyawan'));
      $data = array(
        'nama_karyawan' => $this->input->post('nama_karyawan'),
        'kd_karyawan' => $this->input->post('kd_karyawan'),
        'tempatlahir_karyawan' => $this->input->post('tempatlahir_karyawan'),
        'tgllahir_karyawan' => $this->input->post('tgllahir_karyawan'),
        'alamat_karyawan' => $this->input->post('alamat_karyawan'),
        'nohp_karyawan' => $this->input->post('nohp_karyawan'),
        'kd_jabatan' => $this->input->post('kd_jabatan'),
        'kd_bagian' => $this->input->post('kd_bagian'),
        'jk_karyawan' => $this->input->post('jk_karyawan'),
        'tglmasuk_karyawan' => $this->input->post('tglmasuk_karyawan'),
        'gambar_karyawan' => $image['file_name'],
        'bpjs_kes' => $this->input->post('bpjs_kes'),
        'bpjs_tk' => $this->input->post('bpjs_tk'),
        'bpjs_pen' => $this->input->post('bpjs_pen'),
      );
      $this->Mglobal->editdata('tbl_karyawan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/karyawan/'));
    } else {
      $where = array('kd_karyawan' => $this->input->post('kd_karyawan'));
      $data = array(
        'nama_karyawan' => $this->input->post('nama_karyawan'),
        'kd_karyawan' => $this->input->post('kd_karyawan'),
        'tempatlahir_karyawan' => $this->input->post('tempatlahir_karyawan'),
        'tgllahir_karyawan' => $this->input->post('tgllahir_karyawan'),
        'alamat_karyawan' => $this->input->post('alamat_karyawan'),
        'nohp_karyawan' => $this->input->post('nohp_karyawan'),
        'kd_jabatan' => $this->input->post('kd_jabatan'),
        'kd_bagian' => $this->input->post('kd_bagian'),
        'jk_karyawan' => $this->input->post('jk_karyawan'),
        'tglmasuk_karyawan' => $this->input->post('tglmasuk_karyawan'),
        'bpjs_kes' => $this->input->post('bpjs_kes'),
        'bpjs_tk' => $this->input->post('bpjs_tk'),
        'bpjs_pen' => $this->input->post('bpjs_pen'),

      );
      $this->Mglobal->editdata('tbl_karyawan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/karyawan/'));
    }
  }
}
