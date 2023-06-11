<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datadiriperush extends CI_Controller
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
    // $data['x4']='Data Admin Sahabat Optik';
    $kd_perush = $this->session->userdata('kd_perush');
    // $where = array('kd_santri' => $kd_santri);
    $data['x4'] = 'Data pelamar ' . '| ' . $this->db->query('select nama_bkk from tbl_bkk')->row()->nama_bkk;
    $data['perusahaan'] = $this->db->query("select * from tbl_perusahaan where kd_perush='$kd_perush'")->result();
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/pengaturan/v_datadiriperush');
    $this->load->view('admin/temp/v_footer');
  }



  function aksieditdatadiri()
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
    $config['file_name'] = 'logo_perush' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('logo_perush')) {
      $image = $this->upload->data();
      $where = array('kd_perush' => $this->input->post('kd_perush'));
      $data = array(
        'nama_perush' => $this->input->post('nama_perush'),
        // 'kd_perush' => $this->input->post('kd_perush'),
        'desk_perush' => $this->input->post('desk_perush'),
        'jenisbu_perush' => $this->input->post('jenisbu_perush'),
        // 'acc_admin' => $this->input->post('acc_admin'),
        'nib_perush' => $this->input->post('nib_perush'),
        'sektor_perush' => $this->input->post('sektor_perush'),
        'alamatlengkap_perush' => $this->input->post('alamatlengkap_perush'),
        'notel_perush' => $this->input->post('notel_perush'),
        'namapj_perush' => $this->input->post('namapj_perush'),
        'logo_perush' => $image['file_name'],
        // 'password_perush' => md5($this->input->post('password_perush')),
      );
      $this->Mglobal->editdata('tbl_perusahaan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/pengaturan/datadiriperush/'));
    } else {
      $where = array('kd_perush' => $this->input->post('kd_perush'));
      $data = array(
        'nama_perush' => $this->input->post('nama_perush'),
        // 'kd_perush' => $this->input->post('kd_perush'),
        'desk_perush' => $this->input->post('desk_perush'),
        'jenisbu_perush' => $this->input->post('jenisbu_perush'),
        // 'acc_admin' => $this->input->post('acc_admin'),
        'nib_perush' => $this->input->post('nib_perush'),
        'sektor_perush' => $this->input->post('sektor_perush'),
        'alamatlengkap_perush' => $this->input->post('alamatlengkap_perush'),
        'notel_perush' => $this->input->post('notel_perush'),
        'namapj_perush' => $this->input->post('namapj_perush'),
        // 'password_perush' => md5($this->input->post('password_perush')),

      );
      $this->Mglobal->editdata('tbl_perusahaan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/pengaturan/datadiriperush/'));
    }
  }
}
