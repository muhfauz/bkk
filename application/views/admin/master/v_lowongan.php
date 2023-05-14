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
                                <td><?php echo $a->kd_lowongan ?></td>
                                <td><?php echo $a->nama_lowongan ?></td>
                                <td><?php echo $a->desk_lowongan ?></td>
                                <td><?php if ($a->acc_admin == 'belum') { ?>
                                        <span class="badge badge-primary">Belum</span>

                                    <?php } elseif ($a->acc_admin == 'acc') { ?>

                                        <span class="badge badge-success">ACC</span>
                                    <?php } else { ?>
                                        <span class="badge badge-danger">Banned</span>
                                    <?php } ?>

                                </td>
                                <td class="float-right">
                                    <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_lowongan ?>"> <i class="fa fa-info mr-2"></i> Detail</a>
                                    <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#editdata<?php echo $a->kd_lowongan ?>"> <i class="fa fa-edit mr-2"></i> Edit</a>
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
                <form action="<?php echo base_url('admin/master/lowongan/aksitambahlowongan') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Kode lowongan</label>
                        <input name="kd_lowongan" type="text" class="form-control" readonly value="<?php echo $this->Mglobal->kode_otomatis("kd_lowongan", "tbl_lowongan", "LOWONGAN") ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Nama lowongan</label>
                        <input name="nama_lowongan" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Sektor lowongan</label>

                        <div class="form-group">
                            <select class="form-control" name="kd_sektor" id="" required>
                                <option value="">-Pilih Sektor-</option>
                                <?php foreach ($sektor as $s) : ?>
                                    <option value="<?php echo $s->kd_sektor ?>"><?php echo $s->nama_sektor ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">Tanggal Mulai</label>
                        <input name="tgl_mulai" type="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Tanggal Selesai</label>
                        <input name="tgl_selesai" type="date" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label for="">Kelompok Jabatan</label>

                        <div class="form-group">
                            <select class="form-control" name="kd_jabatan" id="" required>
                                <option value="">-Pilih Kelompok Jabatan-</option>
                                <?php foreach ($jabatan as $j) : ?>
                                    <option value="<?php echo $j->kd_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Lokasi Penempatan</label>
                        <input name="lokasi_penempatan" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Jumlah Pria</label>
                        <input name="jumlah_pria" type="number" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Jumlah Wanita</label>
                        <input name="jumlah_wanita" type="number" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi lowongan</label>
                        <textarea name="desk_lowongan" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Pendidikan</label>
                        <div class="form-group">
                            <select class="form-control" name="kd_pendidikan" id="" required>
                                <option value="">-Pilih Pendidikan-</option>
                                <?php foreach ($pendidikan as $p) : ?>
                                    <option value="<?php echo $p->kd_pendidikan ?>"><?php echo $p->nama_pendidikan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">jurusan</label>
                        <input name="jurusan" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Gambar Lowongan </label>
                        <input name="gambar_lowongan" type="file" class="form-control" multiple="multiple">
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
                    <form action="<?php echo base_url('admin/master/lowongan/hapuslowongan') ?>" method="post">
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

<!-- akhir detail -->

<!-- Modal -->
<?php foreach ($lowongan as $a) : ?>


    <div class="modal fade" id="editdata<?php echo $a->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Form Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/master/lowongan/aksieditlowongan') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama lowongan</label>
                            <input name="nama_lowongan" type="text" class="form-control" value="<?php echo $a->nama_lowongan ?>" required>
                            <input name="kd_lowongan" type="hidden" class="form-control" value="<?php echo $a->kd_lowongan ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Sektor Lowongan</label>
                            <input name="sektor_lowongan" type="text" class="form-control" value="<?php echo $a->sektor_lowongan ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Mulai</label>
                            <input name="tgl_mulai" type="text" class="form-control" value="<?php echo $a->tgl_mulai ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Selesai</label>
                            <input name="tgl_selesai" type="text" class="form-control" value="<?php echo $a->tgl_selesai ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Kelompok Jabatan</label>
                            <input name="kelompok_jabatan" type="text" class="form-control" value="<?php echo $a->kelompok_jabatan ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">lokasi_penempatan</label>
                            <input name="lokas_penempatan" type="text" class="form-control" value="<?php echo $a->lokasi_penempatan ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Pria</label>
                            <input name="jumlah_pria" type="text" class="form-control" value="<?php echo $a->jumlah_pria ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Wanita</label>
                            <input name="jumlah_wanita" type="text" class="form-control" value="<?php echo $a->jumlah_wanita ?>" required>
                        </div>


                        <div class="form-group">
                            <label for="">Deskripsi lowongan</label>
                            <!-- <input name="desk_lowongan" type="text" class="form-control" value="<?php echo $a->desk_lowongan ?>" required> -->
                            <textarea name="desk_lowongan" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?php echo $a->desk_lowongan ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <input name="pendidikan" type="text" class="form-control" value="<?php echo $a->pendidikan ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input name="jurusan" type="text" class="form-control" value="<?php echo $a->jurusan ?>" required>
                        </div>



                        <div class="form-group">

                            <label for="">Gambar Lowongan</label>
                            <br>
                            <img width="100" height="100" src="<?php echo base_url('gambar/lowongan/') . $a->gambar_lowongan ?>" alt="">
                            <br>
                            <input name="gambar_lowongan" type="file" class="form-control" value="">
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