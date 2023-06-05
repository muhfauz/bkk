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
            <h4 class="text-primary"><i class="fa fa-users"></i> <?php echo $x1; ?></h4>
            <p><?php echo $x4 ?></p>
            <div class="table-responsive">
                <?php echo $this->session->userdata('pesan'); ?>
                <!-- <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata"> <i class="fa fa-plus-square mr-2"></i> Tambah Data</a> -->
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-aqua">
                        <tr>
                            <th class="text-center text-white align-middle" rowspan="2" width="10px">No</th>
                            <th class="text-center text-white align-middle" rowspan="2">Nama Pelamar</th>
                            <th class="text-center text-white align-middle" rowspan="2">Alamat Pelamar</th>
                            <th class="text-center text-white align-middle" rowspan="2">Berkas lamaran </th>
                            <th class="text-center text-white align-middle" rowspan="2">Status </th>
                            <th class="text-center text-white align-middle" rowspan="2"></th>

                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($lamaran as $a) :  ?>
                            <tr>
                                <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
                                <td><?php echo $a->nama_pelamar ?></td>
                                <td><?php echo $a->alamatlengkap_pelamar ?></td>
                                <td>
                                    <?php if ($a->berkas_lamaran == '') { ?>
                                        <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#xuploadlamaran<?php echo $a->kd_lamaran ?>"> <i class="fa fa-window-close mr-2" aria-hidden="true"></i></i></i> Kosong</a>
                                    <?php } else { ?>

                                        <a href="" class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#lihatlamaran<?php echo $a->kd_lamaran ?>"> <i class="fa fa-file-pdf-o mr-2" aria-hidden="true"></i></i> Lihat Berkas</a>

                                    <?php } ?>
                                </td>
                                <td><?php if ($a->status_lamaran == 'belum') { ?>
                                        <span class="badge badge-primary"><i class="fa fa-clock-o mr-2" aria-hidden="true"></i>Belum Upload Berkas Lamaran</span>

                                    <?php } elseif ($a->status_lamaran == 'sudah') { ?>
                                        <span class="badge badge-success"><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> Menunggu Seleksi </span>
                                    <?php } elseif ($a->status_lamaran == 'taklolos_adm') { ?>
                                        <span class="badge badge-danger"> <i class="fa fa-window-close mr-2" aria-hidden="true"></i>Tidak Lolos Seleksi Administrasi </span>
                                    <?php } elseif ($a->status_lamaran == 'lolos_adm') { ?>
                                        <span class="badge badge-primary"> <i class="fa fa-check-square mr-2" aria-hidden="true"></i> Lolos Seleksi Administrasi </span>
                                        <a href="" class="badge badge-primary mb-1" data-toggle="modal" data-target="#lihatlokasi<?php echo $a->kd_lamaran ?>"> <i class="fa fa-file-pdf-o mr-2" aria-hidden="true"></i></i> Lihat Lokasi Test</a>
                                    <?php } elseif ($a->status_lamaran == 'diterima') { ?>
                                        <span class="badge badge-primary"> <i class="fa fa-check-square mr-2" aria-hidden="true"></i>Diterima </span>
                                        <a href="" class="badge badge-primary mb-1" data-toggle="modal" data-target="#lihatlamaran<?php echo $a->kd_lamaran ?>"> <i class="fa fa-file-pdf-o mr-2" aria-hidden="true"></i></i> Lihat Hasil Test</a>
                                    <?php } else { ?>
                                        <span class="badge badge-danger"><i class="fa fa-window-close mr-2" aria-hidden="true"></i>Ditolak</span>
                                    <?php } ?>

                                </td>
                                <td class="float-right">
                                    <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_pelamar ?>"> <i class="fa fa-info mr-2"></i> Data Pelamar</a>
                                    <!-- <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#editdata<?php echo $a->kd_lowongan ?>"> <i class="fa fa-edit mr-2"></i> Edit</a> -->
                                    <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#terimaadm<?php echo $a->kd_lowongan ?>"> <i class="fa fa-check-circle mr-2" aria-hidden="true"></i> Lolos ADM</a>
                                    <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#tolakadm<?php echo $a->kd_lowongan ?>"> <i class="fa fa-window-close mr-2" aria-hidden="true"></i> Tak Lolos ADM</a>
                                    <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#terima<?php echo $a->kd_lowongan ?>"> <i class="fa fa-check-circle mr-2" aria-hidden="true"></i> Diterima</a>
                                    <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#tolak<?php echo $a->kd_lowongan ?>"> <i class="fa fa-window-close mr-2" aria-hidden="true"></i> Ditolak</a>


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
<?php foreach ($lamaran as $a) : ?>
    <div class="modal fade" id="datadetail<?php echo $a->kd_pelamar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Detail Data Pelamar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Kode pelamar</th>
                            <td><?php echo $a->kd_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Nama pelamar</th>
                            <td><?php echo $a->nama_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>No KTP pelamar</th>
                            <td><?php echo $a->noktp_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir pelamar</th>
                            <td><?php echo $a->tempatlahir_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir pelamar</th>
                            <td><?php echo $a->tanggallahir_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Agama Pelamar</th>
                            <td><?php echo $a->agama_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin pelamar</th>
                            <td><?php echo $a->jk_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Tinggi Badan pelamar</th>
                            <td><?php echo $a->tinggibadan_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Berat Badan pelamar</th>
                            <td><?php echo $a->beratbadan_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Status Perkawinan pelamar</th>
                            <td><?php echo $a->statusperkawinan_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Alamat Lengkap pelamar</th>
                            <td><?php echo $a->alamatlengkap_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>No HP pelamar</th>
                            <td><?php echo $a->nohp_pelamar ?></td>
                        </tr>
                        <tr>
                            <th>Foto</th>
                            <td>
                                <img width="100" height="100" src="<?php echo base_url('gambar/pelamar/') . $a->foto_pelamar ?>" alt="">
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
<!-- modal terima adm -->
<?php foreach ($lamaran as $a) : ?>


    <div class="modal fade" id="terimaadm<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-check-circle mr-2" aria-hidden="true"></i> Lolos Administrasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/lamaran/lamaranhrd/lolosadm') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin pelamar ini lolos seleksi Administrasi ?
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

<!-- Tolak Adm -->
<?php foreach ($lamaran as $a) : ?>


    <div class="modal fade" id="tolakadm<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-window-close mr-2" aria-hidden="true"></i> Tidak Lolos Administrasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/lamaran/lamaranhrd/taklolosadm') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin pelamar ini Tidak Lolos seleksi Administrasi ?
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
<!-- modal Diterima -->
<?php foreach ($lamaran as $a) : ?>


    <div class="modal fade" id="terima<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-check-circle mr-2" aria-hidden="true"></i> Diterima </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/lamaran/lamaranhrd/terima') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin pelamar ini Akan Diterima sebagai Karyawan ?
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

<!-- Tolak Adm -->
<?php foreach ($lamaran as $a) : ?>


    <div class="modal fade" id="tolak<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-window-close mr-2" aria-hidden="true"></i> Tidak Diterima</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/lamaran/lamaranhrd/tolak') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin pelamar ini Ditolak sebagai karyawan ?
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
<!-- lihat berkas -->
<?php foreach ($lamaran as $a) : ?>
    <div class="modal fade" id="lihatlamaran<?php echo $a->kd_lamaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-file-pdf-o mr-2"></i> Berkas Lamaran <?php echo $a->nama_pelamar ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <script src="https://github.com/pipwerks/PDFObject/blob/master/pdfobject.min.js"></script> -->

                    <form action="<?php echo base_url('admin/lamaran/lamaranpelamar/aksiuploadberkas') ?>" method="post" enctype="multipart/form-data">
                        <div>
                            <embed src="<?php echo base_url('gambar/berkaslamaran/') . $a->berkas_lamaran ?>" frameborder="0" width="100%" height="400px">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-2"></i>Close</button>
                    <!-- <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Simpan</button> -->
                </div>
                </form>

            </div>
        </div>
    </div>
<?php endforeach; ?>