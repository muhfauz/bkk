<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <div class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <?php
      $kd_admin = $this->session->userdata('kd_admin');
      $kd_pelamar = $this->session->userdata('kd_pelamar');
      $kd_perush = $this->session->userdata('kd_perush');

      ?>
      <?php if ($this->session->userdata('posisi') == 'admin') { ?>
        <div class="image text-center"><img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->gambar_admin ?>" class="img-circle" alt="User Image"> </div>
      <?php } elseif ($this->session->userdata('posisi') == 'pelamar') { ?>
        <div class="image text-center"><img src="<?php echo base_url() ?>gambar/pelamar/<?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->foto_pelamar ?>" class="img-circle" alt="User Image"> </div>
      <?php } else { ?>
        <div class="image text-center"><img src="<?php echo base_url() ?>gambar/<?php echo $this->db->query("select * from tbl_perusahaan where kd_perush='$kd_perush'")->row()->logo_perush ?>" class="img-circle" alt="User Image"> </div>

      <?php } ?>

      <div class="info">
        <?php if ($this->session->userdata('posisi') == 'admin') { ?>
          <p>
            <?php echo $this->db->query("select * from tbl_admin where kd_admin='$kd_admin'")->row()->nama_admin ?>
          </p>
          <p>ADMINISTRATOR</p>
        <?php } elseif ($this->session->userdata('posisi') == 'pelamar') { ?>
          <p>
            <?php echo $this->db->query("select * from tbl_pelamar where kd_pelamar='$kd_pelamar'")->row()->nama_pelamar ?>
          </p>
          <p>PELAMAR</p>
        <?php } else { ?>
          <p>
            <?php echo $this->db->query("select * from tbl_perusahaan where kd_perush='$kd_perush'")->row()->nama_perush ?>
          </p>
          <p>ADMIN PERUSAHAAN</p>
          <p>
            <small> <?php echo $this->session->userdata('acc_admin') ?> </small>
          </p>

        <?php } ?>

        <a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off"></i></a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">PERSONAL</li>
      <li> <a href="<?php echo base_url('welcome') ?>"> <i class="fa fa-home mr-2"></i> <span>Home</span> <span class="pull-right-container"> </span> </a> </li>
      <?php if ($this->session->userdata('posisi') == 'admin') { ?>
        <li class="treeview"> <a href="#"> <i class="fa fa-database mr-2"></i> <span>Master</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/master/admin') ?>"> <i class="fa fa-user-o mr-1"></i>Data Admin</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/perusahaan') ?>"> <i class="fa fa-building mr-1"></i>Data Perusahaan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/pelamar') ?>"> <i class="fa fa-user mr-1"></i>Data Pelamar</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/jabatan') ?>"> <i class="fa fa-user mr-1"></i>Data Kelompok Jabatan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/pendidikan') ?>"> <i class="fa fa-user mr-1"></i>Data Pendidikan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/sektor') ?>"> <i class="fa fa-user mr-1"></i>Data Sektor Lowongan</a></li>

          </ul>
        </li>

        <li class="treeview"> <a href="#"> <i class="fa fa-database mr-2"></i> <span>Pelamar</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/master/admin') ?>"> <i class="fa fa-user-o mr-1"></i>Data Admin</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/perusahaan') ?>"> <i class="fa fa-building mr-1"></i>Data Perusahaan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/pelamar') ?>"> <i class="fa fa-user mr-1"></i>Data Pelamar</a></li>

          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-database mr-2"></i> <span>Perusahaan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/master/admin') ?>"> <i class="fa fa-user-o mr-1"></i>Belum ACC</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/perusahaan') ?>"> <i class="fa fa-building mr-1"></i> Perusahaan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/pelamar') ?>"> <i class="fa fa-user mr-1"></i>Banned</a></li>

          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-database mr-2"></i> <span>Lowongan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/master/admin') ?>"> <i class="fa fa-user-o mr-1"></i>Belum ACC</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/master/perusahaan') ?>"> <i class="fa fa-building mr-1"></i>Lowongan ACC</a></li>


          </ul>
        </li>




        <!-- <li class="header">Pengaturan</li> -->
        <li class="treeview"> <a href="#"> <i class="fa fa-cogs mr-2"></i><span>Pengaturan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/judul') ?>"> <i class="fa fa-user-o mr-1"></i>Judul</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/bkk') ?>"> <i class="fa fa-building mr-1"></i>Data BKK</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/logo') ?>"> <i class="fa fa-image mr-1"></i>Logo BKK</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/gantipas') ?>"> <i class="fa fa-image mr-1"></i>Ganti Passwordr</a></li>

          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-file-pdf-o mr-2"></i><span>Laporan ????</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/laporan/ladmin') ?>"> <i class="fa fa-history mr-1"></i>Data Admin</a></li>
          </ul>
        </li>

      <?php } elseif ($this->session->userdata('posisi') == 'perusahaan') { ?>
        <?php if ($this->session->userdata('acc_admin') == 'acc') { ?>
          <li class="treeview"> <a href="#"><i class="fa fa-laptop mr-2" aria-hidden="true"></i><span>Lowongan Kerja</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li class="ml-4"><a href="<?php echo base_url('admin/master/lowongan') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>Loowngan Kerja</a></li>
              <li class="ml-4"><a href="<?php echo base_url('admin/master/lowonganhrd') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>Lowongan ACC </a></li>
              <li class="ml-4"><a href="<?php echo base_url('admin/transaksi/service') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>History Lowongan Kerja</a></li>

            </ul>
          </li>

          <li class="treeview"> <a href="#"><i class="fa fa-cogs mr-2" aria-hidden="true"></i><span>Pengaturan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/datadiri') ?>"><i class="fa fa-user mr-2" aria-hidden="true"></i>Data Perusahaan</a></li>
              <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/gantipassperush') ?>"><i class="fa fa-key mr-2" aria-hidden="true"></i>Ganti Password</a></li>

            </ul>
          </li>

        <?php }  ?>


      <?php } else { ?>

        <li class="treeview"> <a href="#"><i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i><span> Penjualan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/transaksi/penjualan') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>Input Penjualan</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/transaksi/penjualan') ?>"><i class="fa fa-chevron-circle-right mr-2" aria-hidden="true"></i>History Service</a></li>

          </ul>
        </li>

        <li class="treeview"> <a href="#"><i class="fa fa-cogs mr-2" aria-hidden="true"></i><span>Pengaturan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/datadiri') ?>"><i class="fa fa-user mr-2" aria-hidden="true"></i>Data Diri</a></li>
            <li class="ml-4"><a href="<?php echo base_url('admin/pengaturan/gantipassadmin') ?>"><i class="fa fa-key mr-2" aria-hidden="true"></i>Ganti Password</a></li>

          </ul>
        </li>
      <?php } ?>

      <li>
        <a href="<?php echo base_url('login/logout') ?>"> <i class="fa fa-power-off "></i> <span>Keluar</span> <span class="pull-right-container"> </span> </a>
      </li>
    </ul>
  </div>
  <!-- /.sidebar -->
</aside>