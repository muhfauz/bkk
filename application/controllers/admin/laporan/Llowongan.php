<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Llowongan extends CI_Controller
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
    $data['sektor'] = $this->Mglobal->tampilkandata('tbl_sektor');
    $data['pendidikan'] = $this->Mglobal->tampilkandata('tbl_pendidikan');
    $data['jabatan'] = $this->Mglobal->tampilkandata('tbl_jabatan');
    // $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_sektor S, tbl_pendidikan P, tbl_jabatan J where L.kd_sektor=S.kd_sektor and L.kd_pendidikan=P.kd_pendidikan and L.kd_jabatan=J.kd_jabatan and L.kd_perush='$kd_perush'")->result();
    $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_sektor S, tbl_pendidikan P, tbl_jabatan J, tbl_perusahaan PR where L.kd_sektor=S.kd_sektor and L.kd_pendidikan=P.kd_pendidikan and L.kd_jabatan=J.kd_jabatan and L.kd_perush=PR.kd_perush")->result();
    // $data['jabatan'] = $this->Mglobal->tampilkandata('tbl_jabatan');
    // $data['bagian'] = $this->Mglobal->tampilkandata('tbl_bagian');
    $this->load->view('admin/temp/v_header', $data);
    $this->load->view('admin/temp/v_atas');
    $this->load->view('admin/temp/v_sidebar');
    $this->load->view('admin/laporan/lowongan/v_llowongan');
    $this->load->view('admin/temp/v_footer');
  }
  function laporan_pdf_lowongan()
  {
    $this->load->library('pdf');

    $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_sektor S, tbl_pendidikan P, tbl_jabatan J, tbl_perusahaan PR where L.kd_sektor=S.kd_sektor and L.kd_pendidikan=P.kd_pendidikan and L.kd_jabatan=J.kd_jabatan and L.kd_perush=PR.kd_perush")->result();
    $data['bkk'] = $this->Mglobal->tampilkandata('tbl_bkk');
    $this->pdf->setPaper('A4', 'landscape');
    $this->pdf->filename = "laporanpelamar.pdf";
    $this->pdf->load_view('admin/laporan/lowongan/vlaporanpdflowongan', $data);
    // nama file pdf yang di hasilkan
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
        'kd_sektor' => $this->input->post('kd_sektor'),
        'kd_jabatan' => $this->input->post('kd_jabatan'),
        'kd_pendidikan' => $this->input->post('kd_pendidikan'),
        'tgl_mulai' => $this->input->post('tgl_mulai'),
        'tgl_selesai' => $this->input->post('tgl_selesai'),
        'lokasi_penempatan' => $this->input->post('lokasi_penempatan'),
        'jumlah_pria' => $this->input->post('jumlah_pria'),
        'jumlah_wanita' => $this->input->post('jumlah_wanita'),
        'desk_lowongan' => $this->input->post('desk_lowongan'),
        'jurusan' => $this->input->post('jurusan'),
        'kd_perush' =>  $kd_perush,
        'gambar_lowongan' => $image['file_name'],


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
        'kd_sektor' => $this->input->post('kd_sektor'),
        'kd_jabatan' => $this->input->post('kd_jabatan'),
        'kd_pendidikan' => $this->input->post('kd_pendidikan'),
        'tgl_mulai' => $this->input->post('tgl_mulai'),
        'tgl_selesai' => $this->input->post('tgl_selesai'),

        'jumlah_pria' => $this->input->post('jumlah_pria'),
        'jumlah_wanita' => $this->input->post('jumlah_wanita'),
        'desk_lowongan' => $this->input->post('desk_lowongan'),
        'jurusan' => $this->input->post('jurusan'),
        // 'acc_admin' => 'belum',
        'kd_perush' =>  $kd_perush,
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
    $kd_perush = $this->session->userdata('kd_perush');
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
        'kd_sektor' => $this->input->post('kd_sektor'),
        'kd_jabatan' => $this->input->post('kd_jabatan'),
        'kd_pendidikan' => $this->input->post('kd_pendidikan'),
        'tgl_mulai' => $this->input->post('tgl_mulai'),
        'tgl_selesai' => $this->input->post('tgl_selesai'),
        'lokasi_penempatan' => $this->input->post('lokasi_penempatan'),
        'jumlah_pria' => $this->input->post('jumlah_pria'),
        'jumlah_wanita' => $this->input->post('jumlah_wanita'),
        'desk_lowongan' => $this->input->post('desk_lowongan'),
        'jurusan' => $this->input->post('jurusan'),
        // 'acc_admin' => 'belum',
        'kd_perush' =>  $kd_perush,
        'gambar_lowongan' => $image['file_name'],
      );
      $this->Mglobal->editdata('tbl_lowongan', $where, $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Edit Data Sukses!</strong> Data berhasil disimpan ke database.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      redirect(base_url('admin/master/lowongan/'));
    } else {
      $where = array('kd_lowongan' => $this->input->post('kd_lowongan'));
      $data = array(
        'nama_lowongan' => $this->input->post('nama_lowongan'),
        'kd_lowongan' => $this->input->post('kd_lowongan'),
        'kd_sektor' => $this->input->post('kd_sektor'),
        'kd_jabatan' => $this->input->post('kd_jabatan'),
        'kd_pendidikan' => $this->input->post('kd_pendidikan'),
        'tgl_mulai' => $this->input->post('tgl_mulai'),
        'tgl_selesai' => $this->input->post('tgl_selesai'),
        'lokasi_penempatan' => $this->input->post('lokasi_penempatan'),
        'jumlah_pria' => $this->input->post('jumlah_pria'),
        'jumlah_wanita' => $this->input->post('jumlah_wanita'),
        'desk_lowongan' => $this->input->post('desk_lowongan'),
        'jurusan' => $this->input->post('jurusan'),
        // 'acc_admin' => 'belum',
        'kd_perush' =>  $kd_perush,
      );
      $this->Mglobal->editdata('tbl_lowongan', $where, $data);
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
