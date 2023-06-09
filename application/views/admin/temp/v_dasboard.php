<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <?php
    $kd_admin = $this->session->userdata('kd_admin');
    $kd_perush = $this->session->userdata('kd_perush');
    $kd_pelamar = $this->session->userdata('kd_pelamar');

    ?>
    <?php if ($this->session->userdata('posisi') == 'admin') { ?>

      <h4 class="fa fa-home" aria-hidden="true"> Selamat Datang, <?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->nama_admin ?> [ADMINISTRATOR]</h4>
    <?php } elseif ($this->session->userdata('posisi') == 'perusahaan') { ?>
      <h4 class="fa fa-home" aria-hidden="true"> Selamat Datang, <?php echo $this->db->query("select * from tbl_perusahaan where kd_perush='$kd_perush'")->row()->nama_perush ?> [ADMIN PERUSAHAAN]</h4>
    <?php } else { ?>
      <h4 class="fa fa-home" aria-hidden="true"> Selamat Datang, <?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->nama_pelamar ?> [PELAMAR]</h4>
    <?php } ?>


    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i>Home</li>
    </ol>
  </div>

  <!-- Main content -->
  <div class="content">
    <!-- Small boxes (Stat box) -->
    <?php if ($this->session->userdata('posisi') == 'admin') { ?>
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <a href="<?php echo base_url('admin/master/admin') ?>">
            <div class="info-box"> <span class="info-box-icon bg-blue-active "><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number">Data Admin</span> <span class="info-box-text"><?php echo $this->db->query("select * from tbl_admin")->num_rows() ?> admin </span> </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
        <div class="col-lg-4 col-xs-6">
          <a href="<?php echo base_url('admin/master/perusahaan') ?>">
            <div class="info-box"> <span class="info-box-icon bg-yellow"><i class="fa fa-building"></i></span>
              <div class="info-box-content"> <span class="info-box-number">Perusahaan</span> <span class="info-box-text"><?php echo $this->db->query("select * from tbl_perusahaan")->num_rows() ?> perusahaan </span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->
        <div class="col-lg-4 col-xs-6">
          <a href="<?php echo base_url('admin/master/pelamar') ?>">
            <div class="info-box"> <span class="info-box-icon bg-red"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
              <div class="info-box-content"> <span class="info-box-number "> Pelamar </span> <span class="info-box-text"></span></div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    <?php } elseif ($this->session->userdata('posisi') == 'perusahaan') { ?>
      <div class="row">
        <?php if ($this->session->userdata('acc_admin') == 'acc') { ?>
          <div class="col-lg-3 col-xs-6">
            <a href="<?php echo base_url('admin/pengaturan/datadiriperush') ?>">
              <div class="info-box"> <span class="info-box-icon bg-blue"><i class="fa fa-user text-white" aria-hidden="true"></i></span>
                <div class="info-box-content"> <span class="info-box-number "> Data Diri</span> <span class="info-box-text">Data Diri Saya</span></div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <div class="col-lg-3 col-xs-6">
            <a href="<?php echo base_url('admin/master/lowongan') ?>">
              <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="fa fa-file-archive-o text-white" aria-hidden="true"></i></span>
                <div class="info-box-content"> <span class="info-box-number"> Input </span> <span class="info-box-text">Service</span></div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <div class="col-lg-3 col-xs-6">
            <a href="<?php echo base_url('admin/master/lowonganhrd') ?>">
              <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="fa fa-file-archive-o text-white" aria-hidden="true"></i></span>
                <div class="info-box-content"> <span class="info-box-number"> Lowongan Aktif</span> <span class="info-box-text">Service</span></div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
          <div class="col-lg-3 col-xs-6">
            <a href="<?php echo base_url('admin/pengaturan/gantipassperush') ?>">
              <div class="info-box"> <span class="info-box-icon bg-danger"><i class="fa fa-key text-white" aria-hidden="true"></i></span>
                <div class="info-box-content"> <span class="info-box-number"> Ganti</span> <span class="info-box-text">Password</span></div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </a>
          </div>
      </div>
    <?php } elseif ($this->session->userdata('acc_admin') == 'belum') { ?>
      <div class="col-lg-3 col-xs-6">
        <a href="<?php echo base_url('admin/pengaturan/datadiriperush') ?>">
          <div class="info-box"> <span class="info-box-icon bg-blue"><i class="fa fa-user text-white" aria-hidden="true"></i></span>
            <div class="info-box-content"> <span class="info-box-number "> Data Diri</span> <span class="info-box-text">Data Diri Saya</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>

      <div class="col-lg-3 col-xs-6">
        <a href="<?php echo base_url('admin/pengaturan/gantipassperush') ?>">
          <div class="info-box"> <span class="info-box-icon bg-danger"><i class="fa fa-key text-white" aria-hidden="true"></i></span>
            <div class="info-box-content"> <span class="info-box-number"> Ganti</span> <span class="info-box-text">Password</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
  </div>
<?php } else { ?>
<?php } ?>



<!-- keuangan -->



<!-- pajak -->


<!-- penjualan -->

<?php } else { ?>

  <!-- apoteker -->

  <div class="row">

    <!-- /.col -->

    <!-- /.col -->

    <?php if ($this->session->userdata('acc_adminpelamar') == 'acc') { ?>
      <div class="col-lg-4 col-xs-6">


        <a href="<?php echo base_url('admin/pengaturan/datadiri') ?>">
          <div class="info-box"> <span class="info-box-icon bg-blue"><i class="fa fa-user text-white" aria-hidden="true"></i></span>
            <div class="info-box-content"> <span class="info-box-number "> Data Diri</span> <span class="info-box-text">Data Diri Saya</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>

      <div class="col-lg-4 col-xs-6">
        <a href="<?php echo base_url('admin/lamaran/lamaranpelamar') ?>">
          <div class="info-box"> <span class="info-box-icon bg-info"><i class="fa fa-wpexplorer text-white" aria-hidden="true"></i></span>
            <div class="info-box-content"> <span class="info-box-number"> Lamaranku</span> <span class="info-box-text">Lihat</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>

      <div class="col-lg-4 col-xs-6">
        <a href="<?php echo base_url('admin/pengaturan/gantipasspelamar') ?>">
          <div class="info-box"> <span class="info-box-icon bg-danger"><i class="fa fa-key text-white" aria-hidden="true"></i></span>
            <div class="info-box-content"> <span class="info-box-number"> Ganti</span> <span class="info-box-text">Password</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
    <?php } elseif ($this->session->userdata('acc_adminpelamar') == 'belum') { ?>
      <div class="col-lg-3 col-xs-6">


        <a href="<?php echo base_url('admin/pengaturan/datadiri') ?>">
          <div class="info-box"> <span class="info-box-icon bg-blue"><i class="fa fa-user text-white" aria-hidden="true"></i></span>
            <div class="info-box-content"> <span class="info-box-number "> Data Diri</span> <span class="info-box-text">Data Diri Saya</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>



      <div class="col-lg-3 col-xs-6">
        <a href="<?php echo base_url('admin/pengaturan/gantipasspelamar') ?>">
          <div class="info-box"> <span class="info-box-icon bg-danger"><i class="fa fa-key text-white" aria-hidden="true"></i></span>
            <div class="info-box-content"> <span class="info-box-number"> Ganti</span> <span class="info-box-text">Password</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
    <?php } else { ?>
    <?php } ?>

    <!-- /.col -->

    <!-- /.col -->

    <!-- /.col -->
  </div>



  <!-- keuangan -->



  <!-- pajak -->


  <!-- penjualan -->




<?php } ?>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->