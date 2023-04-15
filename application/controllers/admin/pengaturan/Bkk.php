<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bkk extends CI_Controller
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
    $data['x1'] = 'Data BKK';
    $data['x2'] = 'Pengaturan';
    $data['x3'] = 'BKK';
    // $data['x4']='Data Admin Sahabat Optik';
    $data['nama_bkk'] = $this->db->query("select nama_bkk from tbl_bkk")->row()->nama_bkk;

    $data['bkk'] = $this->Mglobal->tampilkandata('tbl_bkk');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pengaturan/v_bkk');
    $this->load->view('admin/temp/v_footer');
  }

  function aksieditbkk()
  {


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
  }
}
