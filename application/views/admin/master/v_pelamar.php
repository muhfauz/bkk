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
                <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata"> <i class="fa fa-plus-square mr-2"></i> Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-aqua">
                        <tr>
                            <th class="text-center text-white align-middle" rowspan="2" width="10px">No</th>
                            <th class="text-center text-white align-middle" rowspan="2">Kode pelamar</th>
                            <th class="text-center text-white align-middle" rowspan="2">Nama pelamar</th>
                            <th class="text-center text-white align-middle" rowspan="2">Alamat</th>
                            <th class="text-center text-white align-middle" rowspan="2"></th>


                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pelamar as $a) :  ?>
                            <tr>
                                <td class="text-center font-weight-bold"><?php echo $no++; ?></td>
                                <td><?php echo $a->kd_pelamar ?></td>
                                <td><?php echo $a->nama_pelamar ?></td>
                                <td><?php echo $a->alamatlengkap_pelamar ?></td>
                                <td class="float-right">
                                    <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_pelamar ?>"> <i class="fa fa-info mr-2"></i> Detail</a>
                                    <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#editdata<?php echo $a->kd_pelamar ?>"> <i class="fa fa-edit mr-2"></i> Edit</a>
                                    <?php if ($this->session->userdata('posisi') == 'admin') { ?>
                                        <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#hapusdata<?php echo $a->kd_pelamar ?>"> <i class="fa fa-trash mr-2"></i> Hapus</a>
                                    <?php } ?>

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

<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-aqua">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/master/pelamar/aksitambahpelamar') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Kode pelamar</label>
                        <input name="kd_pelamar" type="text" class="form-control" readonly value="<?php echo $this->Mglobal->kode_otomatis("kd_pelamar", "tbl_pelamar", "PELAMAR") ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nama pelamar</label>
                        <input name="nama_pelamar" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input name="tempatlahir_pelamar" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input name="tanggallahir_pelamar" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Agama Pelamar</label>
                        <div class="form-group">
                            <select class="form-control" name="agama_pelamar" id="" required>
                                <option value="">-Pilih Agama-</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Kristen">Protestan</option>
                                <option value="Kristen">Hindu</option>
                                <option value="Kristen">Budha</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">No KTP</label>
                        <input name="noktp_pelamar" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamatlengkap_pelamar" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>

                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password_pelamar" type="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Foto pelamar</label>
                        <input name="foto_pelamar" type="file" class="form-control" multiple="multiple">
                        <span class="text-red font-italic text-sm-left">Gambar harus berukuran 370 x 240px untuk tampilan terbaik</span>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o mr-1" aria-hidden="true"></i>Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal detail -->
<?php foreach ($pelamar as $a) : ?>
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
<!-- modal detail -->
<?php foreach ($pelamar as $a) : ?>


    <div class="modal fade" id="hapusdata<?php echo $a->kd_pelamar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/master/pelamar/hapuspelamar') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin akan menghapus data ini ?
                            <!-- <label for="">Nama</label>
                  <input name="nama_karyawan" type="text" class="form-control" value="<?php echo $a->nama_karyawan ?>" required> -->
                            <input name="kd_pelamar" type="hidden" class="form-control" value="<?php echo $a->kd_pelamar ?>" required>
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

<!-- akhir detail -->

<!-- Modal -->
<?php foreach ($pelamar as $a) : ?>


    <div class="modal fade" id="editdata<?php echo $a->kd_pelamar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Form Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/master/pelamar/aksieditpelamar') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama pelamar</label>
                            <input name="nama_pelamar" type="text" class="form-control" value="<?php echo $a->nama_pelamar ?>" required>
                            <input name="kd_pelamar" type="hidden" class="form-control" value="<?php echo $a->kd_pelamar ?>" required>
                        </div>

                        <div class="form-group">

                            <label for="">Logo</label>
                            <br>
                            <img width="100" height="100" src="<?php echo base_url('gambar/pelamar/') . $a->foto_pelamar ?>" alt="">
                            <br>
                            <input name="foto_pelamar" type="file" class="form-control" value="">
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-2"></i>Close</button>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>