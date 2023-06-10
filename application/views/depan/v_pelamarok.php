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
                            <li class="breadcrumb-item"><a href="#">Register Pelamar</a></li>


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
                            <h1>DATA PELAMAR ANDA</h1>
                        </div>
                        <?php echo $this->session->userdata('pesan') ?>
                    </div>

                </div>
                <div class="row">
                    <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="appont_sec_inner">
                            <h6>(052) 611-5711</h6>
                            <a href="#">(052) 611-5711</a>
                            <p>Urgent cases are always seen immediately. Always stand out In the event of an emergency, please call us as soon as like out possible we can.</p>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="appont_sec_inner bg-black">
                            <h6>DATA ANDA</h6>
                            <?php foreach ($pelamar as $p) : ?>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <span>Username
                                        </span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <span><?php echo $p->kd_pelamar ?></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        Nama
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <span><?php echo $p->nama_pelamar ?></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        Alamat
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <span><?php echo $p->alamatlengkap_pelamar ?></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        Password
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <span> Rahasia Pada Anda</span>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>

    <!--------Checkout-------->