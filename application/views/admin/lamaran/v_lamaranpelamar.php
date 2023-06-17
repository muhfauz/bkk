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
                            <th class="text-center text-white align-middle" rowspan="2">Posisi Lowongan</th>
                            <th class="text-center text-white align-middle" rowspan="2">Nama Perusahaan</th>
                            <th class="text-center text-white align-middle" rowspan="2">Upload Berkas </th>
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
                                <td><?php echo $a->nama_lowongan ?></td>
                                <td><?php echo $a->nama_perush ?></td>
                                <td>
                                    <?php if ($a->berkas_lamaran == '') { ?>
                                        <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#uploadlamaran<?php echo $a->kd_lamaran ?>"> <i class="fa fa-upload mr-2" aria-hidden="true"></i></i> Upload</a>
                                    <?php } else { ?>
                                        <?php if ($a->status_lamaran == 'sudah') { ?>
                                            <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#uploadlamaran<?php echo $a->kd_lamaran ?>"> <i class="fa fa-upload mr-2" aria-hidden="true"></i></i> Upload Ulang</a>
                                        <?php } ?>
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
                                        <a href="" class="badge badge-primary mb-1" data-toggle="modal" data-target="#lihatlokasi<?php echo $a->kd_lamaran ?>"> <i class="fa fa-map-marker mr-2" aria-hidden="true"></i></i> Lihat Lokasi Test</a>
                                        <a href="<?php echo base_url('admin/lamaran/lamaranpelamar/cetakpanggilan/') . $a->kd_lamaran ?>" class="btn btn-secondary btn-sm mb-1"> <i class="fa fa-print mr-2"></i> Cetak Panggilan</a>

                                    <?php } elseif ($a->status_lamaran == 'diterima') { ?>
                                        <span class="badge badge-primary"> <i class="fa fa-check-square mr-2" aria-hidden="true"></i>Diterima </span>
                                        <a href="" class="badge badge-primary mb-1" data-toggle="modal" data-target="#lihatlamaran<?php echo $a->kd_lamaran ?>"> <i class="fa fa-file-pdf-o mr-2" aria-hidden="true"></i></i> Lihat Hasil Test</a>
                                    <?php } else { ?>
                                        <span class="badge badge-danger"><i class="fa fa-window-close mr-2" aria-hidden="true"></i>Tidak Diterima</span>
                                    <?php } ?>

                                </td>
                                <td class="float-right">
                                    <a href="" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#datadetail<?php echo $a->kd_lamaran ?>"> <i class="fa fa-info mr-2"></i> Data Perush</a>
                                    <a href="<?php echo base_url('home/single/') . $a->kd_lowongan ?>" class="btn btn-primary btn-sm mb-1"> <i class="fa fa-info mr-2"></i> Lowongan Detail</a>
                                    <!-- <a href="<?php echo base_url('home/single/') . $a->kd_lowongan ?>" class="btn btn-secondary btn-sm mb-1"> <i class="fa fa-print mr-2"></i> Cetak Panggilan</a> -->
                                    <!-- <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#editdata<?php echo $a->kd_lowongan ?>"> <i class="fa fa-edit mr-2"></i> Edit</a> -->
                                    <!-- <a href="" class="btn btn-danger btn-sm mb-1" data-toggle="modal" data-target="#hapusdata<?php echo $a->kd_lowongan ?>"> <i class="fa fa-trash mr-2"></i> Hapus</a> -->


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
                        <textarea name="desk_lowongan" id="tekeditor" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        <!-- <textarea name="tekeditor" id="tekeditor" cols="30" rows="10" class="form-control"></textarea> -->

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
            <script>
                CKEDITOR.replace('tekeditor');
            </script>
        </div>
    </div>
</div>

<!-- modal detail -->
<?php foreach ($lamaran as $a) : ?>
    <div class="modal fade" id="datadetail<?php echo $a->kd_lamaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Detail Data Perusahaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Kode Perusahaan</th>
                            <td><?php echo $a->kd_perush ?></td>
                        </tr>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <td><?php echo $a->nama_perush ?></td>
                        </tr>

                        <tr>
                            <th>Deskripsi Perusahaan</th>
                            <td><?php echo $a->desk_perush ?></td>
                        </tr>

                        <tr>
                            <th>Jenis Badan Usaha Perusahaan</th>
                            <td><?php echo $a->jenisbu_perush ?></td>
                        </tr>

                        <tr>
                            <th>NIB Perusahaan</th>
                            <td><?php echo $a->nib_perush ?></td>
                        </tr>

                        <tr>
                            <th>Sektor Perusahaan</th>
                            <td><?php echo $a->sektor_perush ?></td>
                        </tr>

                        <tr>
                            <th>Alamat Lengkap Perusahaan</th>
                            <td><?php echo $a->alamatlengkap_perush ?></td>
                        </tr>

                        <tr>
                            <th>No Telephone Perusahaan</th>
                            <td><?php echo $a->notel_perush ?></td>
                        </tr>

                        <tr>
                            <th>Nama Penanggungjawab Perusahaan</th>
                            <td><?php echo $a->namapj_perush ?></td>
                        </tr>

                        <tr>
                            <th>Status Perusahaan</th>
                            <td><?php if ($a->acc_admin == 'belum') { ?>
                                    <span class="badge badge-primary">Belum</span>

                                <?php } elseif ($a->acc_admin == 'acc') { ?>

                                    <span class="badge badge-success">ACC</span>
                                <?php } else { ?>
                                    <span class="badge badge-danger">Banned</span>
                                <?php } ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Logo Perusahaan </th>
                            <td>
                                <img width="100" height="100" src="<?php echo base_url('gambar/') . $a->logo_perush ?>" alt="">
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
<?php foreach ($lamaran as $a) : ?>


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
<?php foreach ($lamaran as $a) : ?>
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
                            <div class="form-group">
                                <select class="form-control" name="kd_sektor" id="" required>
                                    <option value="<?php echo $a->kd_sektor ?>"><?php echo $a->nama_sektor ?></option>
                                    <option value="">-Pilih Sektor-</option>
                                    <?php foreach ($sektor as $s) : ?>
                                        <option value="<?php echo $s->kd_sektor ?>"><?php echo $s->nama_sektor ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
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
                            <div class="form-group">
                                <select class="form-control" name="kd_jabatan" id="" required>
                                    <option value="<?php echo $a->kd_jabatan ?>"><?php echo $a->nama_jabatan ?></option>
                                    <option value="">-Pilih Kelompok Jabatan-</option>
                                    <?php foreach ($jabatan as $j) : ?>
                                        <option value="<?php echo $j->kd_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
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
                            <textarea name="desk_lowongan" id="tekeditor2" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?php echo $a->desk_lowongan ?></textarea>
                            <!-- <textarea name="desk_lowongan" id="tekeditor" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea> -->
                        </div>

                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <div class="form-group">
                                <select class="form-control" name="kd_pendidikan" id="" required>
                                    <option value="<?php echo $a->kd_pendidikan ?>"><?php echo $a->nama_pendidikan ?></option>
                                    <option value="">-Pilih Pendidikan-</option>
                                    <?php foreach ($pendidikan as $p) : ?>
                                        <option value="<?php echo $p->kd_pendidikan ?>"><?php echo $p->nama_pendidikan ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
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
                <script>
                    CKEDITOR.replace('tekeditor2');
                </script>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Modal -->
<?php foreach ($lamaran as $a) : ?>
    <div class="modal fade" id="uploadlamaran<?php echo $a->kd_lamaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-upload mr-2"></i> Upload Berkas Lamaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/lamaran/lamaranpelamar/aksiuploadberkas') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">

                            <label for="">Seluruh berkas dijadikan satu dalam file pdf</label>

                            <br>
                            <img width="100" height="100" src="<?php echo base_url('gambar/lowongan/') . $a->gambar_lowongan ?>" alt="">
                            <br>
                            <input name="berkas_lamaran" type="file" class="form-control" value="" required>
                            <input name="kd_lamaran" type="hidden" class="form-control" value="<?php echo $a->kd_lamaran ?>" required>
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close mr-2"></i>Close</button>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-save mr-2"></i>Simpan</button>
                </div>
                </form>
                <script>
                    CKEDITOR.replace('tekeditor2');
                </script>
            </div>
        </div>
    </div>
<?php endforeach; ?>
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
                <script>
                    CKEDITOR.replace('tekeditor2');
                </script>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- lokasi lamaran -->
<?php foreach ($lamaran as $a) : ?>
    <div class="modal fade" id="lihatlokasi<?php echo $a->kd_lamaran ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-aqua">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-map-marker mr-2"></i> Lokasi Test</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <p>Selamat Anda sudah lolos seleksi Administrasi</p>
                        <tr>
                            <th>Lokasi / Tempat Test </th>
                            <td><?php echo $a->lokasi_test ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td><?php echo $a->tgl_test ?></td>
                        </tr>

                        <tr>
                            <th>Waktu</th>
                            <td><?php echo $a->jam_test ?></td>
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