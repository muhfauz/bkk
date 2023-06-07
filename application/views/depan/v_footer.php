 <!-------contact-through----->
 <div class="contact_through">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="contact_through_inner">
                     <span class="flaticon-phone-1 icon"></span>
                     <p>Telepon : <br />
                         <?php echo $this->db->query("select * from tbl_bkk")->row()->telepon_bkk ?></p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="contact_through_inner">
                     <span class="flaticon-placeholder icon"></span>
                     <p>Alamat : <br />
                         <?php echo $this->db->query("select * from tbl_bkk")->row()->alamat_bkk ?></p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="contact_through_inner">
                     <span class="flaticon-envelope icon"></span>
                     <p>Email :<br />
                         <?php echo $this->db->query("select * from tbl_bkk")->row()->email_bkk ?></p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="contact_through_inner">
                     <span class="flaticon-calendar icon"></span>
                     <p>Kode Pos<br />
                         <?php echo $this->db->query("select * from tbl_bkk")->row()->kd_pos ?></p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-------contact-through----->
 <!--------footer-------->
 <div class="footer home-one">
     <div class="container">
         <div class="row">

             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 <div class="footer-widget first">
                     <h2>Tentang Kami</h2>
                     <div class="footer-text">
                         <p><?php echo $this->db->query("select * from tbl_bkk")->row()->tentang_bkk ?></p>

                         <ul class="social-media">
                             <!-- <li><a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a> </li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                            <li><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a> </li>
                            <li><a href="#" target="_blank"><i class="fa fa-wifi"></i></a> </li> -->
                         </ul>
                     </div>
                 </div>
             </div>

             <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                 <div class="footer-widget two">
                     <h2>Link</h2>
                     <div class="footer-text">
                         <ul>
                             <li><a href="<?php echo base_url('home/tentang') ?>"> Tentang Kami</a></li>
                             <li><a href="<?php echo base_url('home/tentang') ?>">Lowongan</a></li>
                             <li><a href="<?php echo base_url('home/faq') ?>">FAQ </a></li>
                             <li><a href="<?php echo base_url('home/hubungi') ?>">Hubungi </a></li>

                         </ul>

                     </div>
                 </div>
             </div>
             <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                 <div class="footer-widget two">
                     <!-- <h2>LINKS</h2> -->
                     <div class="footer-text">



                     </div>
                 </div>
             </div>

             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 <div class="footer-widget third">
                     <h2>NEWSLETTER</h2>
                     <div class="footer-text">
                         <p>Subscribe to our newsletter. We are not spammers.!</p>
                         <form>
                             <div class="form-group">
                                 <input type="email" id="email" placeholder="Enter Your Email*"><br />
                                 <button class="theme-btn" type="submit">SUBSCRIBE</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>


         </div>
     </div>
 </div>

 <!-- <div class="footer-last home-one">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="left">
                    <p>© 2019 <span>Meditex.</span> All rights reserved.</p>
                </div>
                <div class="right">
                    <ul>
                        <li><a href="#">Privacy Policy </a></li>
                        <li><a href="#"> Terms & Conditions </a></li>
                        <li><a href="#"> Help Center</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->

 <!--------footer-------->

 <!-------backtotop-------->
 <a href="#" id="scroll" class="default-bg" style="display: none;"><span></span></a>
 <!-------backtotop-------->
 <!------main-content------>
 </main>
 <!------main-slider------>
 </div>



 <!---------mbile-navbar----->
 <div class="bsnav-mobile">
     <div class="bsnav-mobile-overlay"></div>
     <div class="navbar">
         <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close"></span></button>
     </div>
 </div>
 <!---------mbile-navbar----->

 <!-----------------------------------script-------------------------------------->
 <script src="<?php echo base_url('depan/') ?>assets/js/jquery-3.3.1.min.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/popper.min.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/bsnav.min.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/jquery-ui.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/owl.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/isotope.min.js"></script>
 <!---smooth-scrool-->
 <script src="<?php echo base_url('depan/') ?>assets/js/SmoothScroll.min.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/validator.min.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/contact.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/script.js"></script>

 <!--Google Map APi Key-->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/gmaps.js"></script>
 <script src="<?php echo base_url('depan/') ?>assets/js/map-script.js"></script>
 <!--End Google Map APi-->
 </body>

 </html>