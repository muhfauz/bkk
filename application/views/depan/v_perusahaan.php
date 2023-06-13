<!------main-content------>
<main class="main-content">


    <!-----------------breadcrumb------------------------>
    <section class="ban-bread-crumb mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Register Perusahaan</a></li>


                        </ol>
                    </nav>
                </div>
            </div>
        </div>

    </section>


    <!--------Checkout-------->

    <section class="Checkout_">
        <div class="container">
            <div class="appointment_inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h1>Daftar Sebagai Perusahaan</h1>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="appont_sec_inner">
                            <h6>EMERGENCY</h6>
                            <a href="#">(052) 611-5711</a>
                            <p>Urgent cases are always seen immediately. Always stand out In the event of an emergency, please call us as soon as like out possible we can.</p>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 col-sm-12">
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
                    </div> -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="appont_sec_inner">
                            <h6>BIODATA PERUSAHAAN</h6>
                            <form method="post" action="<?php echo base_url('home/aksitambahperusahaan') ?>">

                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="kd_perush" placeholder="Name*" value="<?php echo $this->Mglobal->kode_otomatis("kd_perush", "tbl_perusahaan", "PERUSH"); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="nama_perush" placeholder="Nama Perusahaan*" required="">
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12"> -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <div class="form-group">
                                            <input type="text" name="alamatlengkap_perush" placeholder="Alamat Perusahaan*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <div class="form-group">
                                            <input type="password" name="password_perush" placeholder="Password*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class="theme-btn" type="submit" name="submit-form">DAFTAR SEBAGAI PERUSAHAAN</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!--------Checkout-------->