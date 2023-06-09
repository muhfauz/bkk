<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->helper('url');
        // if ($this->session->userdata('status') <> 'login') {
        //     redirect(base_url('login'));
        // }
        //Codeigniter : Write Less Do More
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        // $data['spp'] = $this->db->query("select * from tbl_spp S, tbl_tahunajaran T, tbl_admin A where S.kd_tahunajaran=T.kd_tahunajaran and S.kd_admin=A.kd_admin")->result();
        $data['slider'] = $this->db->query("select * from tbl_slider")->result();
        $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_pendidikan P where L.kd_pendidikan=P.kd_pendidikan and L.acc_adminlowongan='acc' ORDER BY L.kd_lowongan DESC  LIMIT 10")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_isi');
        $this->load->view('depan/v_footer');
    }

    public function faq()
    {
        $data['faq'] = $this->db->query("select * from tbl_faq")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_faq');
        $this->load->view('depan/v_footer');
    }
    public function pelamar()
    {
        $data['faq'] = $this->db->query("select * from tbl_faq")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_pelamar');
        $this->load->view('depan/v_footer');
    }
    public function perusahaan()
    {
        $data['faq'] = $this->db->query("select * from tbl_faq")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_perusahaan');
        $this->load->view('depan/v_footer');
    }
    public function tentang()
    {
        $data['tentang'] = $this->db->query("select * from tbl_tentang")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_tentang');
        $this->load->view('depan/v_footer');
    }
    public function lowongan()
    {
        $data['ok'] = "Semua Kategori";
        $data['pendidikan'] = $this->db->query("select * from tbl_pendidikan")->result();
        $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_pendidikan P where L.kd_pendidikan=P.kd_pendidikan and L.acc_adminlowongan='acc' ORDER BY L.kd_lowongan DESC  LIMIT 99")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_lowongan');
        $this->load->view('depan/v_footer');
    }
    public function pendidikan($id)
    {
        $data['ok'] = $this->db->query("select * from tbl_pendidikan where kd_pendidikan='$id'")->row()->nama_pendidikan;
        $data['pendidikan'] = $this->db->query("select * from tbl_pendidikan")->result();
        $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_pendidikan P where L.kd_pendidikan=P.kd_pendidikan and L.acc_adminlowongan='acc' and L.kd_pendidikan='$id' ORDER BY L.kd_lowongan DESC  LIMIT 99")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_lowongan');
        $this->load->view('depan/v_footer');
    }
    public function perush($id)
    {
        $data['ok'] = $this->db->query("select * from tbl_perusahaan where kd_perush='$id'")->row()->nama_perush;
        $data['pendidikan'] = $this->db->query("select * from tbl_pendidikan")->result();
        $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_pendidikan P where L.kd_pendidikan=P.kd_pendidikan and L.acc_adminlowongan='acc' and L.kd_perush='$id' ORDER BY L.kd_lowongan DESC  LIMIT 99")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_lowongan');
        $this->load->view('depan/v_footer');
    }
    public function single($id)
    {
        $data['perusahaan'] = $this->db->query("select * from tbl_perusahaan where acc_admin='acc'")->result();
        $data['lowonganbaru'] = $this->db->query("select * from tbl_lowongan L, tbl_pendidikan P, tbl_perusahaan PR where L.kd_pendidikan=P.kd_pendidikan and L.kd_perush=PR.kd_perush ORDER BY L.kd_lowongan desc limit 5")->result();
        $data['pendidikan'] = $this->Mglobal->tampilkandata('tbl_pendidikan');
        $data['lowongan'] = $this->db->query("select * from tbl_lowongan L, tbl_pendidikan P, tbl_perusahaan PR where L.kd_pendidikan=P.kd_pendidikan and L.kd_perush=PR.kd_perush and  L.kd_lowongan='$id'")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_single');
        $this->load->view('depan/v_footer');
    }
    public function hubungi()
    {
        $data['lowongan'] = $this->db->query("select * from tbl_lowongan")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_hubungi');
        $this->load->view('depan/v_footer');
    }

    public function aksitambahlamaran()
    {
        $session = array(
            'kd_lowongan' => $this->input->post('kd_lowongan'),
        );
        $this->session->set_userdata($session);
        redirect(base_url('home/aksitambahlamaranjadi'));
    }
    public function aksitambahlamaranjadi()
    {
        $data = array(
            'kd_pelamar' => $this->session->userdata('kd_pelamar'),
            'kd_lowongan' => $this->session->userdata('kd_lowongan'),
            'tgl_lamaran' => date("Y-m-d"),
            // 'foto_kategori' => $image['file_name'],
        );
        $this->Mglobal->tambahdata($data, 'tbl_lamaran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Lamaran Anda Sukses!</strong> Data berhasil disimpan ke database.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
        redirect(base_url('home/single/' . $this->session->userdata('kd_lowongan')));
    }

    public function aksitambahpelamar()
    {
        $data = array(
            'kd_pelamar' => $this->input->post('kd_pelamar'),
            'nama_pelamar' => $this->input->post('nama_pelamar'),
            'alamatlengkap_pelamar' => $this->input->post('alamatlengkap_pelamar'),
            'password_pelamar' => md5($this->input->post('password_pelamar')),
            'foto_pelamar' => 'foto_pelamar.png',
        );
        $this->Mglobal->tambahdata($data, 'tbl_pelamar');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Pendaftaran Anda Berhasil!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
        redirect(base_url('home/pelamarok/'));
    }
    public function pelamarok()
    {
        $data['pelamar'] = $this->db->query("select * from tbl_pelamar order by kd_pelamar desc limit 1")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_pelamarok');
        $this->load->view('depan/v_footer');
    }
    public function aksitambahperusahaan()
    {
        $data = array(
            'kd_perush' => $this->input->post('kd_perush'),
            'nama_perush' => $this->input->post('nama_perush'),
            'alamatlengkap_perush' => $this->input->post('alamatlengkap_perush'),
            'password_perush' => md5($this->input->post('password_perush')),
            'logo_perush' => 'logo_perush.png',
        );
        $this->Mglobal->tambahdata($data, 'tbl_perusahaan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Pendaftaran Anda Berhasil!</strong> Data berhasil disimpan ke database.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
        redirect(base_url('home/perusahaanok/'));
    }
    public function perusahaanok()
    {
        $data['perusahaan'] = $this->db->query("select * from tbl_perusahaan order by kd_perush desc limit 1")->result();
        $this->load->view('depan/v_header', $data);
        // $this->load->view('admin/temp/v_atas');
        // $this->load->view('admin/temp/v_sidebar');
        $this->load->view('depan/v_perusahaanok');
        $this->load->view('depan/v_footer');
    }
}
