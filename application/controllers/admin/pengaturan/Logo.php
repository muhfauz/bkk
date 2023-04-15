<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logo extends CI_Controller
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
    $data['x1'] = 'Data Logo BKK';
    $data['x2'] = 'Pengaturan';
    $data['x3'] = 'Logo BKK';
    // $data['x4']='Data Admin Sahabat Optik';
    $data['nama_bkk'] = $this->db->query("select nama_bkk from tbl_bkk")->row()->nama_bkk;

    $data['bkk'] = $this->Mglobal->tampilkandata('tbl_bkk');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pengaturan/v_logo');
    $this->load->view('admin/temp/v_footer');
  }

  function aksieditbkk()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
    //  $this->form_validation->set_rules('username_admin', 'Username Admin', 'required');
    //   $this->form_validation->set_rules('password_admin', 'Password Admin', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    $where = array('kd_bkk' => $this->input->post('kd_bkk'));
    $data = array(
      'nama_bkk' => $this->input->post('nama_bkk'),
      'alamat_bkk' => $this->input->post('alamat_bkk'),
      'tentang_bkk' => $this->input->post('tentang_bkk'),
      'telepon_bkk' => $this->input->post('telepon_bkk'),
      'email_bkk' => $this->input->post('email_bkk'),
      //  'password_admin'=>md5($this->input->post('password_admin'))
    );
    $this->Mglobal->editdata('tbl_bkk', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/pengaturan/bkk/'));
    //  }
    //  else {

    //    $this->load->view('adm/header');
    //    $this->load->view('adm/sidebar');
    //    $this->load->view('adm/master/admin/vtambahadmin');
    //    $this->load->view('adm/footer');
    //  }
  }
  function aksieditlogo()
  {

    //Form Validasi jika kosong
    // $this->form_validation->set_rules('logo', 'logo', 'required');
    // $this->form_validation->set_rules('oleh', 'Oleh', 'required');
    $config['upload_path'] = './assets/img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';
    $config['file_name'] = 'gambar' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('logob_bkk')) {
      $image = $this->upload->data();
      $where = array('kd_bkk' => $this->input->post('kd_bkk'));
      $data = array(
        //'nama_logo'=>$image['file_name']
        'logob_bkk' => $image['file_name']
      );


      $this->Mglobal->editdata('tbl_bkk', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
      redirect(base_url('admin/pengaturan/logo/'));
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Edit Data Gagal!</strong> Anda tidak pilih gambar atau format file bukan jpg/png/jpeg.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
      redirect(base_url('admin/pengaturan/logo/'));
    }
  }
  function aksieditlogok()
  {

    //Form Validasi jika kosong
    // $this->form_validation->set_rules('logo', 'logo', 'required');
    // $this->form_validation->set_rules('oleh', 'Oleh', 'required');
    $config['upload_path'] = './assets/img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';
    $config['file_name'] = 'gambar' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('logok_bkk')) {
      $image = $this->upload->data();
      $where = array('kd_bkk' => $this->input->post('kd_bkk'));
      $data = array(
        //'nama_logo'=>$image['file_name']
        'logok_bkk' => $image['file_name']
      );


      $this->Mglobal->editdata('tbl_bkk', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
      redirect(base_url('admin/pengaturan/logo/'));
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Edit Data Gagal!</strong> Anda tidak pilih gambar atau format file bukan jpg/png/jpeg.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
      redirect(base_url('admin/pengaturan/logo/'));
    }
  }
  function aksieditlogodepan()
  {

    //Form Validasi jika kosong
    // $this->form_validation->set_rules('logo', 'logo', 'required');
    // $this->form_validation->set_rules('oleh', 'Oleh', 'required');
    $config['upload_path'] = './assets/img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';
    $config['file_name'] = 'logodepan' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('logo_depan')) {
      $image = $this->upload->data();
      $where = array('kd_bkk' => $this->input->post('kd_bkk'));
      $data = array(
        //'nama_logo'=>$image['file_name']
        'logo_depan' => $image['file_name']
      );


      $this->Mglobal->editdata('tbl_bkk', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
      redirect(base_url('admin/pengaturan/logo/'));
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Edit Data Gagal!</strong> Anda tidak pilih gambar atau format file bukan jpg/png/jpeg.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
      redirect(base_url('admin/pengaturan/logo/'));
    }
  }
}
