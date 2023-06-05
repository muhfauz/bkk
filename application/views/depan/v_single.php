<!------main-content------>
<?php foreach ($lowongan as $l) : ?>


    <main class="main-content">


        <!-----------------breadcrumb------------------------>
        <section class="ban-bread-crumb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('home/lowongan') ?>">Lowongan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lowongan Kerja <?php echo $l->nama_lowongan ?> di <?php echo $l->nama_perush ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </section>

        <!-----------------breadcrumb------------------------>
        <div class="blog-single-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="sidebar_md_one">
                            <!----search-box---->
                            <div class="search_bar">
                                <h2 class="sub_head">Search</h2>
                                <div class="srch_input">
                                    <input type="text" name="search" id="search" placeholder="Enter Keyword..." autocomplete="off" />
                                    <button type="submit" class="search"><span class="flaticon-search"></span></button>
                                </div>
                            </div>
                            <!----search-box---->
                            <!----Categories---->
                            <div class="categories">
                                <h2 class="sub_head">Categories</h2>
                                <ul>
                                    <li><a href="#">All Pendidkan<span>(<?php echo $this->db->query("select * from tbl_lowongan")->num_rows() ?>)</span></a></li>
                                    <?php foreach ($pendidikan as $p) : ?>
                                        <?php $kd_pendidikan = $p->kd_pendidikan; ?>
                                        <li><a href="#"> <?php echo $p->nama_pendidikan ?><span>(<?php echo $this->db->query("select * from tbl_lowongan where kd_pendidikan='$kd_pendidikan'")->num_rows() ?>)</span></a></li>
                                    <?php endforeach ?>


                                </ul>
                            </div>
                            <!----Categories---->
                            <!---Popular Posts--->
                            <div class="popular_posts">
                                <h2 class="sub_head">Lowongan Terbaru</h2>
                                <?php foreach ($lowonganbaru as $lb) : ?>
                                    <div class="posts_">
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                            <a class="thumbnail" href="#">
                                                <img class="img-responsive" src="" alt="">
                                                <a href="<?php echo base_url('home/single/') . $lb->kd_lowongan ?>"><img src="<?php echo base_url('gambar/lowongan/') . $lb->gambar_lowongan ?>" class="img-responsive" alt="popular_post" /></a>
                                            </a>
                                        </div>

                                        <div class="post_content">
                                            <p><?php echo $lb->nama_pendidikan . ', ' . $this->Mglobal->tanggalindo($lb->tgl_selesai) ?> </p>
                                            <h2><a href="<?php echo base_url('home/single/') . $lb->kd_lowongan ?>">Lowongan Kerja <?php echo $lb->nama_lowongan ?> di <?php echo $lb->nama_perush ?></a></h2>
                                        </div>
                                    </div>
                                <?php endforeach ?>


                            </div>
                            <!---Popular Posts--->
                            <!----TAG CLOUD----->
                            <div class="tag_cloud">
                                <h2 class="sub_head">Perusahaan</h2>
                                <div class="tags">
                                    <?php foreach ($perusahaan as $pr) : ?>
                                        <a href="#"><?php echo $pr->nama_perush ?> </a>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                            <!----TAG CLOUD----->
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">

                        <div class="blog_single_post_right">

                            <div class="blog-single_post-inner">

                                <div class="blog-content">
                                    <?php echo $this->session->userdata('pesan'); ?>
                                    <p><?php echo $lb->nama_pendidikan ?> <span><?php echo $this->Mglobal->tanggalindo($lb->tgl_selesai) ?></span></p>
                                    <h2><a href="#">Lowongan Kerja <?php echo $l->nama_lowongan ?> di <?php echo $l->nama_perush ?> </a></h2>
                                    <p class="desc">Lowongan Kerja <?php echo $l->nama_lowongan ?> dengan spesifikasi :</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <th>Nama Perusahaan </th>
                                                    <td><?php echo $lb->nama_perush ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Tutup Lowongan</th>
                                                    <td><?php echo $this->Mglobal->tanggalindo($lb->tgl_selesai) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <td><?php echo $lb->tgl_test ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Pendidikan</th>
                                                    <td><?php echo $lb->nama_pendidikan ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Penempatan</th>
                                                    <td><?php echo $lb->lokasi_penempatan ?></td>
                                                </tr>
                                            </table>

                                        </div>


                                    </div>

                                </div>
                                <div class="image blog_sub_ban">
                                    <img src="<?php echo base_url('gambar/lowongan/') . $l->gambar_lowongan ?>" class="img-fluid" alt="case" />
                                </div>
                                <div class="authour_desc">
                                    <h2>Kualifikasi</h2>

                                    <?php echo $lb->desk_lowongan ?>
                                </div>
                                <div class="authour_quotes">
                                    <div class="quotes_inner">
                                        <span class="flaticon-quote"></span>
                                        <p> We go over plans, I meet with them. ‘Let’s help you become a better you.’
                                            I really love what I do and it’s helping me grow as a person as well.</p>
                                        <h6 class="authour_name">Reta Schmidt</h6>
                                    </div>
                                    <p class="desc">Reta Schmidt, a peer recovery coach at Meditex Good Samaritan Hospital, struggled with alcohol abuse and has had family members who have had substance use issues. The peer recovery coaches in the program must have been sober for at least three years and in a support program themselves.</p>
                                </div>


                                <div class="about_authour_description">

                                    <h6 class="authour_name"><?php echo $lb->nama_perush ?></h6>
                                    <p>
                                        <?php echo $lb->nama_perush ?> merupakan<?php echo $lb->desk_perush ?> yang beralamat di <?php echo $lb->alamatlengkap_perush ?>
                                    </p>
                                </div>
                                <div class="tage_and_share clearfix">
                                    <div class="tags">
                                        <ul>
                                            <li>Tags:</li>
                                            <li><a href="#"> Health,</a></li>
                                            <li><a href="#"> Lifestyle, </a></li>
                                            <li><a href="#">Experience</a></li>
                                        </ul>
                                    </div>
                                    <div class="share">
                                        <ul>
                                            <li>Share on:</li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="authour_testimonial">
                                    <div class="col-lg-3 col-md-4 col-xs-6 image mb-3">
                                        <a class="thumbnail" href="#">
                                            <img class="img-responsive" src="<?php echo base_url('gambar/') . $l->logo_perush ?>" alt="">

                                        </a>
                                    </div>
                                    <!-- <div class="image">
                                        <img src="<?php echo base_url('gambar/') . $l->logo_perush ?>" class="img-fluid" alt="img" />
                                    </div> -->
                                    <div class="content">
                                        <h6><?php echo $l->namapj_perush ?> <span>Author</span></h6>
                                        <p><?php echo $l->nama_perush ?> , <?php echo $l->desk_perush ?></p>
                                    </div>
                                </div>


                                <div class="suggesstions mt-5">
                                    <h1></h1>
                                    <h1>You May <span>Also Like</span></h1>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="popular_articles_content">
                                                <div class="image">
                                                    <img src="assets/image/articles/hm-2-articles-2.jpg" class="img-fluid" alt="articles">
                                                    <a href="#" class="link"></a>
                                                </div>
                                                <div class="articles_content">
                                                    <p>Lifestyle . <span> April 04, 2018 </span></p>
                                                    <h6><a href="#">Medstar Health Bel Air Cancer Services Aligns Expertise </a></h6>
                                                    <a href="#" class="read_">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="popular_articles_content">
                                                <div class="image">
                                                    <img src="assets/image/articles/hm-2-articles-2.jpg" class="img-fluid" alt="articles">
                                                    <a href="#" class="link"></a>
                                                </div>
                                                <div class="articles_content">
                                                    <p>Lifestyle . <span> April 04, 2018 </span></p>
                                                    <h6><a href="#">Dr. Gabriel Del Corral Joins MedStar Plastic & Reconstructive Surgery</a> </h6>
                                                    <a href="#" class="read_">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="leave_reply">
                                    <!-- <h1>Leave <span>A Reply</span></h1> -->
                                    <form>
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="from-group">
                                                    <?php if ($this->session->userdata('status') == 'login' and $this->session->userdata('posisi') == 'pelamar') { ?>
                                                        <?php if ($this->session->userdata('acc_adminpelamar') == 'acc') { ?>
                                                            <?php
                                                            $kd_pelamar = $this->session->userdata('kd_pelamar');
                                                            $kd_lowongan = $l->kd_lowongan;
                                                            $sudahlamar = $this->db->query("select * from tbl_lamaran where kd_lowongan='$kd_lowongan' and kd_pelamar='$kd_pelamar'")->num_rows();
                                                            if ($sudahlamar > 0) { ?>
                                                                <div class="alert alert-danger" role="alert">
                                                                    Anda sudah melamar lowongan ini
                                                                </div>
                                                            <?php } else { ?>

                                                                <a href="" class="btn comment_btn" data-toggle="modal" data-target="#lamardata<?php echo $l->kd_lowongan ?>"> <i class="fa fa-edit mr-2"></i> Lamar</a>
                                                            <?php } ?>
                                                        <?php } else { ?>
                                                            <div class="alert alert-danger" role="alert">
                                                                Akun Anda masih belum Aktif <a href="#" class="alert-link"></a>. Tidak bisa melamar.
                                                            </div>
                                                        <?php } ?>
                                                    <?php } ?>


                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>


    <!-- Modal Lamar -->
    <?php foreach ($lowongan as $l) : ?>
        <div class="modal fade main-content" id="lamardata<?php echo $l->kd_lowongan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Lamar Lowongan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('home/aksitambahlamaran') ?>" method="post">
                            <div class="form-group">
                                Apakah Anda Yakin akan Melamar Lowongan Kerja <?php echo $l->nama_lowongan ?> di <?php echo $l->nama_perush ?> ini ?

                                <input name="kd_lowongan" type="hidden" class="form-control" value="<?php echo $l->kd_lowongan ?>" required>
                            </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-window-close mr-2" aria-hidden="true"></i>Tidak</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-check mr-2" aria-hidden="true"></i>Ya</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Akhir Modal Lamar -->