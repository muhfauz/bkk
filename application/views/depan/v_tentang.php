<!------main-content------>
<main class="main-content">


    <!-----------------breadcrumb------------------------>
    <section class="ban-bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('home') ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Tentang Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

    </section>

    <?php foreach ($tentang as $t) : ?>


        <!-----------------welcome_section------------------------>
        <section class="welcome_section hme-one" style="background:url(<?php echo base_url('gambar/') . $t->gambar_tentang ?>)">
            <div class="container">



                <div class="row">
                    <div class="col-lg-6">
                        <div class="welcme_inner">
                            <div class="heading clearfix">
                                <h1> <span><?php echo $t->judul_tentang ?> </span></h1>
                            </div>
                            <h6>Our mission is to provide first-class independent healthcare for the local community in a safe, comfortable, and welcoming environment.</h6>
                            <?php echo $t->isi_tentang ?>
                            <ul>
                                <!-- <li><img src="assets/image/awards-1.png" class="img-fluid" alt="awards"></li>
                                <li><img src="assets/image/awards-2.png" class="img-fluid" alt="awards"></li>
                                <li><img src="assets/image/awards-3.png" class="img-fluid" alt="awards"></li>
                                <li><img src="assets/image/awards-4.png" class="img-fluid" alt="awards"></li> -->
                            </ul>
                            <a href="#" class="theme-btn">GET IN TOUCH</a>
                        </div>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
        </section>
    <?php endforeach ?>
    <!-----------------welcome_section------------------------>