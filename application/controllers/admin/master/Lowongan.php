<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
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
    $data['x1'] = 'Data Lowongan';
    $data['x2'] = 'Master';
    $data['x3'] = 'Lowongan';
    $data['x4'] = 'Data Lowongan ' . '| ' . $this->db->query('select nama_bkk from tbl_bkk')->row()->nama_bkk;
    $kd_perush = $this->session->userdata('kd_perush');
    $data['lowongan'] = $this->db->query("select * from tbl_lowongan where kd_perush='$kd_perush'")->result();
    // $data['jabatan'] = $this->Mglobal->tampilkandata('tbl_jabatan');
    // $data['bagian'] = $this->Mglobal->tampilkandata('tbl_bagian');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/master/v_lowongan');
    $this->load->view('admin/temp/v_footer');
  }

  function aksitambahlowongan()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_karyawan', 'Nama karyawan', 'required');
    //  $this->form_validation->set_rules('username_karyawan', 'Username karyawan', 'required');
    // $this->form_validation->set_rules('password_karyawan', 'Password karyawan', 'required');
    // if($this->form_validation->run()!=false)
    // {
    $kd_perush = $this->session->userdata('kd_perush');
    $config['upload_path'] = './gambar/lowongan/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    $config['max_size'] = '204800000000000000009999999999999999999999999999999';
    $config['file_name'] = 'gambar_lowongan' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar_lowongan')) {
      $image = $this->upload->data();
      $data = array(
        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'kd_lowongan' => $this->input->post('kd_lowongan'),
        'desk_lowongan' => $this->input->post('desk_lowongan'),
        'acc_admin' => $this->input->post('acc_admin'),
        'kd_perush' => $kd_perush,
        // 'jenisbu_lowongan' => $this->input->post('jenisbu_lowongan'),
        // 'nib_lowongan' => $this->input->post('nib_lowongan'),
        // 'sektor_lowongan' => $this->input->post('sektor_lowongan'),
        // 'alamatlengkap_lowongan' => $this->input->post('alamatlengkap_lowongan'),
        // 'notel_lowongan' => $this->input->post('notel_lowongan'),
        // 'namapj_lowongan' => $this->input->post('namapj_lowongan'),
        // 'password_lowongan' => md5($this->input->post('password_lowongan')),
        'gambar_lowongan' => $image['file_name'],





        // 'ket_karyawan' => $this->input->post('ket_karyawan'),
        // 'foto_karyawan' => $image['file_name'],
      );
      $this->Mglobal->tambahdata($data, 'tbl_lowongan');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect(base_url('admin/master/lowongan/'));
    } else {
      $data = array(
        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'kd_lowongan' => $this->input->post('kd_lowongan'),
        'desk_lowongan' => $this->input->post('desk_lowongan'),
        'kd_perush' => $kd_perush,
        // 'jenisbu_lowongan' => $this->input->post('jenisbu_lowongan'),
        // 'nib_lowongan' => $this->input->post('nib_lowongan'),
        // 'sektor_lowongan' => $this->input->post('sektor_lowongan'),
        // 'alamatlengkap_lowongan' => $this->input->post('alamatlengkap_lowongan'),
        // 'notel_lowongan' => $this->input->post('notel_lowongan'),
        // 'namapj_lowongan' => $this->input->post('namapj_lowongan'),
        // 'password_lowongan' => md5($this->input->post('password_lowongan')),
        'gambar_lowongan' => 'lowongan_kerja.png'


      );
      $this->Mglobal->tambahdata($data, 'tbl_lowongan');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect(base_url('admin/master/lowongan/'));
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
  function hapuslowongan()
  {
    $where = array('kd_lowongan' => $this->input->post('kd_lowongan'));
    $this->Mglobal->hapusdata($where, 'tbl_lowongan');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hapus Data Sukses!</strong> Data berhasil dihapus dari database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/master/lowongan/'));
  }

  function aksieditlowongan()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_karyawan', 'Nama karyawan', 'required');
    //  $this->form_validation->set_rules('username_karyawan', 'Username karyawan', 'required');
    //   $this->form_validation->set_rules('password_karyawan', 'Password karyawan', 'required');
    //  if($this->form_validation->run()!=false)
    //  {
    $config['upload_path'] = './gambar/lowongan/';
    $config['allowed_types'] = 'jpg|jpeg|png|tif|bmp';
    $config['max_size'] = '2048';
    $config['file_name'] = 'gambar_lowongan' . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar_lowongan')) {
      $image = $this->upload->data();
      $where = array('kd_lowongan' => $this->input->post('kd_lowongan'));
      $data = array(
        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'kd_lowongan' => $this->input->post('kd_lowongan'),
        'desk_lowongan' => $this->input->post('desk_lowongan'),
        'acc_admin' => $this->input->post('acc_admin'),
        'kd_perush' => $kd_perush,
        // 'jenisbu_lowongan' => $this->input->post('jenisbu_lowongan'),
        // 'nib_lowongan' => $this->input->post('nib_lowongan'),
        // 'sektor_lowongan' => $this->input->post('sektor_lowongan'),
        // 'alamatlengkap_lowongan' => $this->input->post('alamatlengkap_lowongan'),
        // 'notel_lowongan' => $this->input->post('notel_lowongan'),
        // 'namapj_lowongan' => $this->input->post('namapj_lowongan'),
        // 'password_lowongan' => md5($this->input->post('password_lowongan')),
        'gambar_lowongan' => $image['file_name'],
        // 'password_lowongan' => md5($this->input->post('password_lowongan')),
      );
      $this->Mglobal->editdata('tbl_perusahaan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/perusahaan/'));
    } else {
      $where = array('kd_lowongan' => $this->input->post('kd_lowongan'));
      $data = array(
        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'kd_lowongan' => $this->input->post('kd_lowongan'),
        'desk_lowongan' => $this->input->post('desk_lowongan'),
        'acc_admin' => $this->input->post('acc_admin'),
        'kd_perush' => $kd_perush,


      );
      $this->Mglobal->editdata('tbl_perusahaan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/lowongan/'));
    }
  }
}
