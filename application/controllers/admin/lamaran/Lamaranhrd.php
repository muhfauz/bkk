<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lamaranhrd extends CI_Controller
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
    $data['x1'] = 'Data Lamaran';
    $data['x2'] = 'Lamaran';
    $data['x3'] = 'Lamaran';
    $data['x4'] = 'Data Lamaran ' . $this->session->userdata('nama_pelamar') . '| ' . $this->db->query('select nama_bkk from tbl_bkk')->row()->nama_bkk;
    $kd_perush = $this->session->userdata('kd_perush');
    $kd_lowongan = $this->session->userdata('kd_lowongan');
    $data['lamaran'] = $this->db->query("select * from tbl_lamaran L, tbl_pelamar P, tbl_lowongan Lo, tbl_perusahaan Pl where L.kd_pelamar=P.kd_pelamar and L.kd_lowongan=Lo.kd_lowongan and Lo.kd_perush=Pl.kd_perush and L.kd_lowongan='$kd_lowongan'")->result();
    // $data['jabatan'] = $this->Mglobal->tampilkandata('tbl_jabatan');
    // $data['bagian'] = $this->Mglobal->tampilkandata('tbl_bagian');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/lamaran/v_lamaranhrd');
    $this->load->view('admin/temp/v_footer');
  }

  function aksiuploadberkas()
  {

    //Form Validasi jika kosong
    //  $this->form_validation->set_rules('nama_karyawan', 'Nama karyawan', 'required');
    //  $this->form_validation->set_rules('username_karyawan', 'Username karyawan', 'required');
    // $this->form_validation->set_rules('password_karyawan', 'Password karyawan', 'required');
    // if($this->form_validation->run()!=false)
    // {
    $kd_pelamar = $this->session->userdata('kd_pelamar');
    $nama_pelamar = $this->session->userdata('nama_pelamar');
    $config['upload_path'] = './gambar/berkaslamaran/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = '204800000000000000009999999999999999999999999999999';
    $config['file_name'] = 'lamaran' . $nama_pelamar . time();
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('berkas_lamaran')) {
      $image = $this->upload->data();
      $where = array('kd_lamaran' => $this->input->post('kd_lamaran'));
      $data = array(

        'status_lamaran' => 'sudah',
        'berkas_lamaran' => $image['file_name'],

      );
      $this->Mglobal->editdata('tbl_lamaran', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Tambah Data Sukses!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect(base_url('admin/lamaran/lamaranpelamar/'));
    } else {
      // $data = array();
      // $this->Mglobal->tambahdata($data, 'tbl_lowongan');
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Uploud Data Gagal!</strong> Type file yang Anda upload bukan pdf .
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
      redirect(base_url('admin/lamaran/lamaranpelamar/'));
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
  function putar()
  {
    $session = array('kd_lowongan' => $this->input->post('kd_lowongan'));
    $this->session->set_userdata($session);
    redirect(base_url('admin/lamaran/lamaranhrd'));
  }

  function lolosadm()
  {
    $where = array('kd_lowongan' => $this->session->userdata('kd_lowongan'));
    $data = array(
      'status_lamaran' => 'lolos_adm',
    );
    $this->Mglobal->editdata('tbl_lamaran', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pelamar Lolos Adm!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/lamaran/lamaranhrd/'));
  }
  function taklolosadm()
  {
    $where = array('kd_lowongan' => $this->session->userdata('kd_lowongan'));
    $data = array(
      'status_lamaran' => 'taklolos_adm',
    );
    $this->Mglobal->editdata('tbl_lamaran', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pelamar Lolos Adm!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/lamaran/lamaranhrd/'));
  }
  function terima()
  {
    $where = array('kd_lowongan' => $this->session->userdata('kd_lowongan'));
    $data = array(
      'status_lamaran' => 'diterima',
    );
    $this->Mglobal->editdata('tbl_lamaran', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pelamar Lolos Adm!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/lamaran/lamaranhrd/'));
  }
  function tolak()
  {
    $where = array('kd_lowongan' => $this->session->userdata('kd_lowongan'));
    $data = array(
      'status_lamaran' => 'ditolak',
    );
    $this->Mglobal->editdata('tbl_lamaran', $where, $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pelamar Lolos Adm!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect(base_url('admin/lamaran/lamaranhrd/'));
  }
}
