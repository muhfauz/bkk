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
                                <h2 class="sub_head">Popular Posts</h2>
                                <?php foreach ($lowonganbaru as $lb) : ?>
                                    <div class="posts_">
                                        <a href="#"><img src="<?php echo base_url('gambar/lowongan/') . $lb->gambar_lowongan ?>" class="img-responsive" alt="popular_post" /></a>
                                        <div class="post_content">
                                            <p>Business . July 10, 2018</p>
                                            <h2><a href="#">Lowongan Kerja <?php echo $lb->nama_lowongan ?> di <?php echo $lb->nama_perush ?></a></h2>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                                <div class="posts_">
                                    <a href="#"><img src="assets/image/post/blog-post-2.jpg" class="img-fluid" alt="popular_post" /></a>
                                    <div class="post_content">
                                        <p>Experience . April 04, 2018</p>
                                        <h2><a href="#">Urban Mosquito Control With Help From Scientists</a></h2>
                                    </div>
                                </div>
                                <div class="posts_">
                                    <a href="#"><img src="assets/image/post/blog-post-3.jpg" class="img-fluid" alt="popular_post" /></a>
                                    <div class="post_content">
                                        <p>Lifestyle . April 04, 2018</p>
                                        <h2><a href="#">Study Finds 43% Drop in Stroke Rate</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!---Popular Posts--->
                            <!----TAG CLOUD----->
                            <div class="tag_cloud">
                                <h2 class="sub_head">Tag Cloud</h2>
                                <div class="tags">
                                    <a href="#">Care</a><a href="#">Healing</a><a href="#">Cancer</a>
                                    <a href="#">Technolory</a><a href="#">Hospital</a>
                                    <a href="#">Clinic</a><a href="#">Health</a><a href="#">Patient</a>
                                </div>
                            </div>
                            <!----TAG CLOUD----->
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">

                        <div class="blog_single_post_right">

                            <div class="blog-single_post-inner">

                                <div class="blog-content">
                                    <p>Business . <span>July 10, 2018</span></p>
                                    <h2><a href="#">Lowongan Kerja <?php echo $l->nama_lowongan ?> di <?php echo $l->nama_perush ?> </a></h2>
                                    <p class="desc">In the 12 months following Meditex Health’s launch of the Screening, Brief Intervention and
                                        Referral to Treatment program known as SBIRT, more than 4.560 patients struggling with
                                        substance abuse have been referred to treatment.</p>
                                </div>
                                <div class="image blog_sub_ban">
                                    <img src="assets/image/blog/blog_single_4.jpg" class="img-fluid" alt="case" />
                                </div>
                                <div class="authour_desc">

                                    <p>As the nation struggles with the opioid epidemic and a spike in fentanyl-related overdoses, emergency departments are often on the front line in treating patients with addiction. These patients often return to the emergency department again and again, and without an interventional program like SBIRT, could see their addiction and overall health worsen.<br /> <br />
                                        Under the program, which is conducted in partnership with Mosaic Group, a Maryland healthcare consulting firm, all patients in the emergency department are screened for risky substance abuse behaviors. If the screening indicates a moderate or high risk, a peer recovery coach uses motivational interviewing techniques in an attempt to promote the patient’s own desire to change. The peer recovery coach then offers additional evaluation and referral services for high-risk patients.
                                    </p>
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


                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="blog_single_post_img_">
                                            <img src="assets/image/blog/blog_single_post_1.jpg" class="img-fluid" alt="img" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="blog_single_post_img_">
                                            <img src="assets/image/blog/blog_single_post_2.jpg" class="img-fluid" alt="img" />
                                        </div>
                                    </div>
                                </div>

                                <div class="about_authour_description">
                                    <h2>About Meditex Health</h2>
                                    <p>
                                        Meditex Health is a not-for-profit health system dedicated to caring for people in Maryland and the Washington, D.C., region, while advancing the practice of medicine through education, innovation and research. MedStar’s 20,000 associates, 5,000 affiliated physicians, 15 hospitals, ambulatory care and urgent care centers, and the Meditex Health Research Institute are recognized regionally and nationally for excellence in medical care. As the medical education and clinical partner of Georgetown University,
                                        <br /><br />
                                        Meditex trains more than 1,100 medical residents annually. MedStar Health’s patient-first philosophy combines care, compassion and clinical excellence with an emphasis on customer service. For more information, visit
                                        MeditexHealth.com
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
                                    <div class="image">
                                        <img src="assets/image/blog/blog_single_post_authour.png" class="img-fluid" alt="img" />
                                    </div>
                                    <div class="content">
                                        <h6>Keven Feil <span>Author</span></h6>
                                        <p>Keven Feil is a contributing writer for Live Science. She covers animals, health and other general science topics. Her work has appeared in the Jewish Daily Forward</p>
                                    </div>
                                </div>

                                <div class="suggesstions">
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

                                <div class="comments">
                                    <h1>02 <span>Comments</span></h1>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="comment_innner">
                                                <div class="image">
                                                    <img src="assets/image/blog/blog_comment_img-1.png" class="img-fluid" alt="img" />
                                                </div>
                                                <div class="comment_text first">
                                                    <h2>Willy Fahey</h2>
                                                    <p>I would like help with a problem I’m having, but I have concerns about going to Student Mental Health & Counseling. Should I go to “Let’s Chat”?</p>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="comment_innner">
                                                <div class="image">
                                                    <img src="assets/image/blog/blog_comment_img-2.png" class="img-fluid" alt="img" />
                                                </div>
                                                <div class="comment_text">
                                                    <h2>Willy Fahey</h2>
                                                    <p>I would like help with a problem I’m having, but I have concerns about going to Student Mental Health & Counseling. Should I go to “Let’s Chat”?</p>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="leave_reply">
                                    <h1>Leave <span>A Reply</span></h1>
                                    <form>
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="from-group">
                                                    <button type="submit" class="comment_btn">SUBMIT COMMENTS</button>
                                                    <a href="" class="btn btn-info btn-sm mb-1" data-toggle="modal" data-target="#hapusdata"> <i class="fa fa-edit mr-2"></i> Lamar</a>
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
    <div class="modal fade" id="hapusdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa fa-user-circle-o mr-2"></i> Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('admin/deskripsi/kegiatan/hapuskegiatan') ?>" method="post">
                        <div class="form-group">
                            Apakah Anda Yakin akan menghapus data ini ?
                            <!-- <label for="">Nama</label>
                  <input name="nama_kegiatan" type="text" class="form-control" value="<?php echo $a->nama_kegiatan ?>" required> -->
                            <input name="kd_kegiatan" type="hidden" class="form-control" value="<?php echo $a->kd_kegiatan ?>" required>
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
    <!-- Akhir Modal Lamar -->