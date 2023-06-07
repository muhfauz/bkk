<!------main-content------>
<main class="main-content">



    <!------main-slider------>
    <section class="main-slider">
        <div class="main-slider-carousel main-slider-one owl-carousel owl-theme">
            <?php foreach ($slider as $s) : ?>
                <div class="slide" style="background-image:url(<?php echo base_url('depan/assets/image/banner/') . $s->gambar_slider ?>)">
                    <div class="container text-left">
                        <div class="content ">
                            <h1><?php echo $s->atas_slider ?><br />
                                <span><?php echo $s->tengah_slider ?></span>
                            </h1>
                            <div class="text"><?php echo $s->bawah_slider ?></div>
                            <div class="link-box">
                                <a href="#" class="theme-btn ">DEPARTMENTS</a>
                                <a href="#" class="theme-btn btn-dark">get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </section>
    <!------main-slider------>

    <!-------appointment-section----->
    <section class="appointment_section hm-one">
        <div class="container">
            <div class="appointment_inner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="appont_sec_inner">
                            <h6>EMERGENCY</h6>
                            <a href="#">(052) 611-5711</a>
                            <p>Urgent cases are always seen immediately. Always stand out In the event of an emergency, please call us as soon as like out possible we can.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="appont_sec_inner">
                            <h6>WORK HOURS</h6>
                            <ul>
                                <li>Mon - Thu...............<span>7:00 - 17:00</span></li>
                                <li> Friday.......................<span>7:30 - 17:00</span></li>
                                <li> Saturday.................<span>8:00 - 16:00</span></li>
                                <li> Sunday....................<span>9:00 - 16:00</span></li>
                                <li> Holiday....................<span>9:00 - 11:00</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="appont_sec_inner">
                            <h6>BOOK AN APPOINTMENT</h6>
                            <form method="post" action="#">

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="email*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input id="datepicker" class="form-control date" name="date" placeholder="Date">

                                            <span class="add-on"><i class="icon flaticon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class=" theme-btn" type="submit" name="submit-form">BOOK YOUR APPOINTMENT NOW</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------appointment-section----->


    <!--------best-doctors-------->
    <section class="best-doctors  hme-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h1>Lowongan<span> Kerja</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme three-item">
                        <?php foreach ($lowongan as $l) : ?>
                            <div class="best-doctor-outer">
                                <div class="image">
                                    <img src="<?php echo base_url('gambar/lowongan/') . $l->gambar_lowongan ?>" class="img-fluid" alt="best-doctors" />
                                    <a href="<?php echo base_url('home/single/') . $l->kd_lowongan ?>" class="link"></a>
                                </div>
                                <div class="content-inner">
                                    <h2> <a href="<?php echo base_url('home/single/') . $l->kd_lowongan ?>"><?php echo $l->nama_lowongan ?> </a> </h2>
                                    <span><?php echo $l->nama_pendidikan ?></span>
                                    <p><?php echo $l->nama_lowongan ?> dengan tingkat pendidikan <?php echo $l->nama_pendidikan ?> masih tersedia, silaka lihat detail </p>
                                    <ul>
                                        <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa fa-vimeo"></i></a></li>
                                        <li><a href="#"><i class="fa fa-share-alt"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>

                        <?php endforeach; ?>




                    </div>
                    <div class="view-more-doctors">
                        <a href="#" class="view-doctors">SEE ALL DOCTORS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------best-doctors-------->