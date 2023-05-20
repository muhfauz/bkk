<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1 class="text-black"> <i class="fa fa-users"></i> <?php echo $x1; ?></h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> <?php echo $x2; ?></li>
            <li><i class="fa fa-angle-right"></i> <?php echo $x3; ?></li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="info-box">
            <!-- <h4 class="text-primary"><i class="fa fa-users"></i> <?php echo $x1; ?></h4> -->
            <p><?php echo $x4 ?></p>
            <div class="table-responsive">
                <?php echo $this->session->userdata('pesan'); ?>
                <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata"> <i class="fa fa-plus-square mr-2"></i> Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-aqua">
                        <tr>
                            <th class="text-center text-white align-middle" rowspan="2" width="10px">No</th>
                            <th class="text-center text-white align-middle" rowspan="2">Kode lowongan</th>
                            <th class="text-center text-white align-middle" rowspan="2">Nama lowongan</th>
                            <th class="text-center text-white align-middle" rowspan="2">Deskripsi lowongan</th>
                            <th class="text-center text-white align-middle" rowspan="2">Status</th>
                            <th class="text-center text-white align-middle" rowspan="2"></th>

                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($lowongan as $a) :  ?>
                            <tr>
                                <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
                                <td><?php echo $a->nama_perush ?></td>
                                <td><?php echo $a->nama_lowongan ?></td>
                                <td><?php echo $a->desk_lowongan ?></td>
                                <td>
                                    <span class="badge badge-primary"><?php echo $a->acc_adminlowongan ?></span>
                                </td>
                                <td class="float-right">
                                    <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_lowongan ?>"> <i class="fa fa-info mr-2"></i> Detail</a>
                                    <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#accdata<?php echo $a->kd_lowongan ?>"> <i class="fa fa-edit mr-2"></i> ACC </a>
                                    <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#hapusdata<?php echo $a->kd_lowongan ?>"> <i class="fa fa-trash mr-2"></i> Hapus</a>


                                </td>
                            </tr>
                        <?php endforeach ?>

                </table>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- modal detail -->
<?php foreach ($lowongan as $a) : ?>
    <div class="modal fade" id="datadetail<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Detail Data lowongan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Kode lowongan</th>
                            <td><?php echo $a->kd_lowongan ?></td>
                        </tr>
                        <tr>
                            <th>Nama lowongan</th>
                            <td><?php echo $a->nama_lowongan ?></td>
                        </tr>

                        <tr>
                            <th>Sektor Lowongan</th>
                            <td><?php echo $a->nama_sektor ?></td>
                        </tr>

                        <tr>

                            <th>Tanggal Mulai</th>
                            <td><?php echo $a->tgl_mulai ?></td>
                        </tr>

                        <tr>
                            <th>Tanggal Selesai</th>
                            <td><?php echo $a->tgl_selesai ?></td>
                        </tr>

                        <tr>
                            <th>Kelompok Jabatan</th>
                            <td><?php echo $a->nama_jabatan ?></td>
                        </tr>

                        <tr>
                            <th>Lokasi Penempatan</th>
                            <td><?php echo $a->lokasi_penempatan ?></td>
                        </tr>

                        <tr>
                            <th>Jumlah Pria</th>
                            <td><?php echo $a->jumlah_pria ?></td>
                        </tr>

                        <tr>
                            <th>Jumlah Wanita</th>
                            <td><?php echo $a->jumlah_wanita ?></td>
                        </tr>

                        <tr>
                            <th>Deskripsi lowongan</th>
                            <td><?php echo $a->desk_lowongan ?></td>
                        </tr>

                        <tr>
                            <th>Pendidikan</th>
                            <td><?php echo $a->nama_pendidikan ?></td>
                        </tr>

                        <tr>
                            <th>Jurusan</th>
                            <td><?php echo $a->jurusan ?></td>
                        </tr>




                        <tr>
                            <th>ACC admin</th>
                            <td><?php echo $a->acc_admin ?></td>
                        </tr>

                        <tr>
                            <th>Kode Perusahaan</th>
                            <td><?php echo $a->kd_perush ?></td>
                        </tr>

                        <tr>
                            <th>Gambar lowongan </th>
                            <td>
                                <img width="100" height="100" src="<?php echo base_url('gambar/lowongan/') . $a->gambar_lowongan ?>" alt="">
                            </td>
                        </tr>


                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- akhir detail -->
<!-- modal detail -->
<?php foreach ($lowongan as $a) : ?>


    <div class="modal fade" id="hapusdata<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/master/lowonganadmin/hapuslowongan') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin akan menghapus data ini ?
                            <!-- <label for="">Nama</label>
                  <input name="nama_karyawan" type="text" class="form-control" value="<?php echo $a->nama_karyawan ?>" required> -->
                            <input name="kd_lowongan" type="hidden" class="form-control" value="<?php echo $a->kd_lowongan ?>" required>
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-danger">Ya</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- modal acc -->
<?php foreach ($lowongan as $a) : ?>


    <div class="modal fade" id="accdata<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> ACC Lowongan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/master/lowonganadmin/acclowongan') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin akan ACC data ini ?
                            <!-- <label for="">Nama</label>
              <input name="nama_karyawan" type="text" class="form-control" value="<?php echo $a->nama_karyawan ?>" required> -->
                            <input name="kd_lowongan" type="hidden" class="form-control" value="<?php echo $a->kd_lowongan ?>" required>
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-danger">Ya</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>