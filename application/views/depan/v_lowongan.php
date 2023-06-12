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
                            <li class="breadcrumb-item active" aria-current="page">Lowongan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

    </section>

    <!-----------------breadcrumb------------------------>
    <div class="blog-grid-section ui-group" data-js="filter-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading clearfix">
                        <h1>Lowongan <span>Kerja </span><?php echo $ok; ?></h1>
                    </div>
                </div>
            </div>


            <div class="filter-group">
                <ul class="button-group manasory-filter" data-filter-group="case">
                    <li class="button active" data-filter="">All categories </li>
                    <?php foreach ($pendidikan as $p) : ?>
                        <li class="button" data-filter=".<?php echo $p->kd_pendidikan ?>"> <?php echo $p->nama_pendidikan ?> </li>
                    <?php endforeach; ?>

                </ul>
            </div>

            <div class="grid">
                <?php foreach ($lowongan as $l) : ?>
                    <div class="grid-item col-md-4 col-xs-6 blog-grid-outer <?php echo $l->kd_pendidikan ?>">
                        <div class="blog-grid-inner">
                            <div class="image">
                                <img src="<?php echo base_url('gambar/lowongan/') . $l->gambar_lowongan ?>" class="img-fluid" alt="case" width="370" height="296" />
                                <a href="<?php echo base_url('home/single/') . $l->kd_lowongan ?>" class="link"></a>
                            </div>
                            <div class="blog-grid-content">
                                <p><?php echo $l->nama_pendidikan ?> . <span>July 10, 2018</span></p>
                                <h2><a href="<?php echo base_url('home/single/') . $l->kd_lowongan ?>"><?php echo $l->nama_lowongan ?> </a></h2>
                                <a href="<?php echo base_url('home/single/') . $l->kd_lowongan ?>" class="rd-more">READ MORE</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>









            </div>
            <div class="row">
                <div class="col-lg-12 text-center pagination_column">
                    <ul class="pagination">
                        <!-- <li class="disabled"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                        <li class="active"><a href="#">01 </a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                        <li><a href="#"><span class="fa fa-angle-right"></span></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>