<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lpelamar extends CI_Controller
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
    $data['x1'] = 'Laporan Data pelamar';
    $data['x2'] = 'Laporan';
    $data['x3'] = 'Pelamar';
    $data['x4'] = 'Data pelamar ' . '| ' . $this->db->query('select nama_bkk from tbl_bkk')->row()->nama_bkk;
    $data['pelamar'] = $this->db->query("select * from tbl_pelamar")->result();
    // $data['jabatan'] = $this->Mglobal->tampilkandata('tbl_jabatan');
    // $data['bagian'] = $this->Mglobal->tampilkandata('tbl_bagian');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/laporan/pelamar/v_lpelamar');
    $this->load->view('admin/temp/v_footer');
  }

  function aksitambahpelamar()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_karyawan', 'Nama karyawan', 'required');
    //  $this->form_validation->set_rules('username_karyawan', 'Username karyawan', 'required');
    // $this->form_validation->set_rules('password_karyawan', 'Password karyawan', 'required');
    // if($this->form_validation->run()!=false)
    // {
    $config['upload_path'] = './gambar/pelamar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    $config['max_size'] = '2048';
    $config['file_name'] = 'foto_pelamar' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('foto_pelamar')) {
      $image = $this->upload->data();
      $data = array(
        'kd_pelamar' => $this->input->post('kd_pelamar'),
        'nama_pelamar' => $this->input->post('nama_pelamar'),
        'noktp_pelamar' => $this->input->post('noktp_pelamar'),
        'tempatlahir_pelamar' => $this->input->post('tempatlahir_pelamar'),
        'tanggallahir_pelamar' => $this->input->post('tanggallahir_pelamar'),
        'agama_pelamar' => $this->input->post('agama_pelamar'),
        'acc_adminpelamar' => 'acc',
        'jk_pelamar' => $this->input->post('jk_pelamar'),
        'nohp_pelamar' => $this->input->post('nohp_pelamar'),
        'tinggibadan_pelamar' => $this->input->post('tinggibadan_pelamar'),
        'beratbadan_pelamar' => $this->input->post('beratbadan_pelamar'),
        'statusperkawinan_pelamar' => $this->input->post('statusperkawinan_pelamar'),
        'alamatlengkap_pelamar' => $this->input->post('alamatlengkap_pelamar'),
        'password_pelamar' => md5($this->input->post('password_pelamar')),
        'foto_pelamar' => $image['file_name'],





        // 'ket_karyawan' => $this->input->post('ket_karyawan'),
        // 'foto_karyawan' => $image['file_name'],
      );
      $this->Mglobal->tambahdata($data, 'tbl_pelamar');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect(base_url('admin/master/pelamar/'));
    } else {
      $data = array(
        'kd_pelamar' => $this->input->post('kd_pelamar'),
        'nama_pelamar' => $this->input->post('nama_pelamar'),
        'noktp_pelamar' => $this->input->post('noktp_pelamar'),
        'tempatlahir_pelamar' => $this->input->post('tempatlahir_pelamar'),
        'tanggallahir_pelamar' => $this->input->post('tanggallahir_pelamar'),
        'agama_pelamar' => $this->input->post('agama_pelamar'),
        'jk_pelamar' => $this->input->post('jk_pelamar'),
        'acc_adminpelamar' => 'acc',
        'nohp_pelamar' => $this->input->post('nohp_pelamar'),
        'tinggibadan_pelamar' => $this->input->post('tinggibadan_pelamar'),
        'beratbadan_pelamar' => $this->input->post('beratbadan_pelamar'),
        'statusperkawinan_pelamar' => $this->input->post('statusperkawinan_pelamar'),
        'alamatlengkap_pelamar' => $this->input->post('alamatlengkap_pelamar'),
        'password_pelamar' => md5($this->input->post('password_pelamar')),
        'foto_pelamar' => 'foto_pelamar.png',        // 'logo_perush' => 'logo_perush.png',


      );
      $this->Mglobal->tambahdata($data, 'tbl_pelamar');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect(base_url('admin/master/pelamar/'));
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
  function hapuspelamar()
  {
    $where = array('kd_pelamar' => $this->input->post('kd_pelamar'));
    $this->Mglobal->hapusdata($where, 'tbl_pelamar');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/pelamar/'));
  }

  function aksieditpelamar()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_karyawan', 'Nama karyawan', 'required');
    //  $this->form_validation->set_rules('username_karyawan', 'Username karyawan', 'required');
    //   $this->form_validation->set_rules('password_karyawan', 'Password karyawan', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    $config['upload_path'] = './gambar/pelamar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    $config['max_size'] = '2048';
    $config['file_name'] = 'foto_pelamar' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('foto_pelamar')) {
      $image = $this->upload->data();
      $where = array('kd_pelamar' => $this->input->post('kd_pelamar'));
      $data = array(
        'nama_pelamar' => $this->input->post('nama_pelamar'),
        'noktp_pelamar' => $this->input->post('noktp_pelamar'),
        'tempatlahir_pelamar' => $this->input->post('tempatlahir_pelamar'),
        'tanggallahir_pelamar' => $this->input->post('tanggallahir_pelamar'),
        'agama_pelamar' => $this->input->post('agama_pelamar'),
        'jk_pelamar' => $this->input->post('jk_pelamar'),
        'nohp_pelamar' => $this->input->post('nohp_pelamar'),
        'tinggibadan_pelamar' => $this->input->post('tinggibadan_pelamar'),
        'beratbadan_pelamar' => $this->input->post('beratbadan_pelamar'),
        'statusperkawinan_pelamar' => $this->input->post('statusperkawinan_pelamar'),
        'alamatlengkap_pelamar' => $this->input->post('alamatlengkap_pelamar'),
        'password_pelamar' => md5($this->input->post('password_pelamar')),
        'foto_pelamar' => $image['file_name'],
      );
      $this->Mglobal->editdata('tbl_pelamar', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/pelamar/'));
    } else {
      $where = array('kd_pelamar' => $this->input->post('kd_pelamar'));
      $data = array(
        'nama_pelamar' => $this->input->post('nama_pelamar'),
        'noktp_pelamar' => $this->input->post('noktp_pelamar'),
        'tempatlahir_pelamar' => $this->input->post('tempatlahir_pelamar'),
        'tanggallahir_pelamar' => $this->input->post('tanggallahir_pelamar'),
        'agama_pelamar' => $this->input->post('agama_pelamar'),
        'jk_pelamar' => $this->input->post('jk_pelamar'),
        'nohp_pelamar' => $this->input->post('nohp_pelamar'),
        'tinggibadan_pelamar' => $this->input->post('tinggibadan_pelamar'),
        'beratbadan_pelamar' => $this->input->post('beratbadan_pelamar'),
        'statusperkawinan_pelamar' => $this->input->post('statusperkawinan_pelamar'),
        'alamatlengkap_pelamar' => $this->input->post('alamatlengkap_pelamar'),
        'password_pelamar' => md5($this->input->post('password_pelamar')),
        // 'foto_pelamar' => $image['file_name'],

      );
      $this->Mglobal->editdata('tbl_pelamar', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/pelamar/'));
    }
  }
}
