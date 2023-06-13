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
                            <li class="breadcrumb-item active" aria-current="page"> FAQS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

    </section>

    <!-----------------breadcrumb------------------------>
    <div class="faq_s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">


                    <div class="heading">
                        <h1>Pertanyaan Umum Tentang <span>Lowongan Kerja </span></h1>
                    </div>


                    <div class="accordion" id="faq-accordion">
                        <?php foreach ($faq as $f) : ?>


                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <?php echo $f->tanya_faq ?> <i class="flaticon-plus main n-active"></i> <i class="flaticon-minus main active-min"></i>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#faq-accordion">
                                    <div class="card-body">
                                        <?php echo $f->jawab_faq ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center pagination_column">

                </div>
            </div>
        </div>
    </div>