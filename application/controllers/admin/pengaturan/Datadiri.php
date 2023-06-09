<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datadiri extends CI_Controller
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
    $data['x1'] = 'Data Diri';
    $data['x2'] = 'Pengaturan';
    $data['x3'] = 'Data Diri';
    $kd_pelamar = $this->session->userdata('kd_pelamar');
    $data['x4'] = 'Data pelamar ' . '| ' . $this->db->query('select nama_bkk from tbl_bkk')->row()->nama_bkk;
    $data['pelamar'] = $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->result();
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pengaturan/v_datadiri');
    $this->load->view('admin/temp/v_footer');
  }
  function tambahadmin()
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'Admin';
    $data['x3'] = 'Tambah Admin Inventaris';
    $data['x4'] = 'Menambahkan Data Admin Inventaris Sahabat Optik';
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/admin/vtambahadmin', $data);
    $this->load->view('adm/footer');
  }
  function aksitambahadmin()
  {
    $config['upload_path'] = './gambar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp|jfif';
    $config['max_size'] = '20480000';
    $config['file_name'] = 'adm_' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar_admin')) {
      $image = $this->upload->data();
      $data = array(
        'kd_admin' => $this->input->post('kd_admin'),
        'nama_admin' => $this->input->post('nama_admin'),
        'username_admin' => $this->input->post('username_admin'),
        'alamat_admin' => $this->input->post('alamat_admin'),
        'nohp_admin' => $this->input->post('nohp_admin'),
        'status_admin' => $this->input->post('status_admin'),
        'gambar_admin' => $image['file_name'],
        'password_admin' => md5($this->input->post('password_admin'))
      );
      $this->Mglobal->tambahdata($data, 'tbl_admin');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/admin/'));
    } else {
      $data = array(
        'kd_admin' => $this->input->post('kd_admin'),
        'nama_admin' => $this->input->post('nama_admin'),
        'username_admin' => $this->input->post('username_admin'),
        'alamat_admin' => $this->input->post('alamat_admin'),
        'nohp_admin' => $this->input->post('nohp_admin'),
        'status_admin' => $this->input->post('status_admin'),
        // 'gambar_admin' => $image['file_name'],
        'password_admin' => md5($this->input->post('password_admin'))
      );
      $this->Mglobal->tambahdata($data, 'tbl_admin');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/admin/'));
    }
  }

  function hapusadmin()
  {
    $where = array('kd_admin' => $this->input->post('kd_admin'));
    $this->Mglobal->hapusdata($where, 'tbl_admin');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/admin/'));
  }
  function editadmin($id)
  {
    $data['x1'] = 'Master';
    $data['x2'] = 'Admin';
    $data['x3'] = 'Edit Admin Inventaris';
    $data['x4'] = 'Mengedit Data Admin Inventaris Sahabat Optik';
    $where = array('kd_admin' => $id);
    $data['admin'] = $this->Mglobal->tampilkandatasingle('tbl_admin', $where);
    $this->load->view('adm/header');
    $this->load->view('adm/sidebar');
    $this->load->view('adm/master/admin/veditadmin', $data);
    $this->load->view('adm/footer');
  }
  function aksieditdatadiri()
  {
    $where = array('kd_pelamar' => $this->session->userdata('kd_pelamar'));
    $config['upload_path'] = './gambar/pelamar/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    $config['max_size'] = '2048';
    $config['file_name'] = 'foto_pelamar' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('foto_pelamar')) {
      $image = $this->upload->data();
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
      redirect(base_url('admin/pengaturan/datadiri'));
      //  }
      //  else {

      //    $this->load->view('adm/header');
      //    $this->load->view('adm/sidebar');
      //    $this->load->view('adm/master/admin/vtambahadmin');
      //    $this->load->view('adm/footer');
      //  }
    } else {
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
        // 'gambar_admin' => $image['file_name'],
        //  'password_admin'=>md5($this->input->post('password_admin'))
      );
      $this->Mglobal->editdata('tbl_pelamar', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/pengaturan/datadiri/'));
    }
  }
}
