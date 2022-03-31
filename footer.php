 <!-- ====== Footer section start ====== -->
 <section id="footer" class="section-gap">
     <div class="container">
         <div class="row">
             <div class="col-lg-5 col-md-12">
                 <div class="footer-box pt-0">
                     <div class="footer-logo-tex-box">
                         <h2><a href="https://www.trivaitltd.com/">AL-RAZI HOSPITAL PVT.</a></h2>
                         <p><b>Your Health Care Centre</b></p>
                     </div>
                 </div>

                 <div class="footer-box">
                     <p class="text-justify">Al-Razi Hospital Pvt. provide comprehensive care using state-of-the-art equipments. Backed by the expertise, our team is dedicated towards enhancing, sustaining, and restoring your Health.</p>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="footer-box text-center pt-1">
                     <h3>FOLLOW US ON SOCIAL MEDIA</h3>
                     <ul class="social-list">
                         <li>
                             <a href="https://www.facebook.com/alrazihospitalpvt" target="_blank" rel="follow" title="Facebook">
                                 <i class="fab fa-facebook-f"></i>
                             </a>
                         </li>
                         <li>
                     </ul>
                 </div>
                 <!--
                    <div class="footer-box text-center">
                        <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                        <div class="subscribe">
                            <form role="form" action="" method="post" id="sub-form">
                                <input type="email" id="sub-email" class="form-control" placeholder="Enter your email here">
                                <button type="submit" id="submit" class="footer-btn">SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>-->
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="footer-box pt-1">
                     <h3>Contact With Us</h3>
                     <div class="contact-list">
                         <ul>
                             <li>
                                 <i class="far fa-envelope"></i>
                                 <a href="mailto:info@trivaitltd.com">alrazihospitalpvt@gmail.com</a>
                             </li>
                             <li>
                                 <i class="fas fa-phone"></i>
                                 <a href="tel:+8801611 710 666">01893-056247</a>,
                                 <a href="tel:+8801611 710 666">01893-056248</a>
                             </li>
                             <li class="mb-0">
                                 <p><i class="fas fa-map-marker-alt"></i>Nargis Manzil, C/O. Abdul Mannan, House No. 459/2, Word No. 01, Hospital Road, Maijdee 3800</p>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ====== Footer section end ====== -->
 <!-- ====== Footer section2 start ====== -->
 <section id="footer2" class="section-gap-top section-gap-bottom">
     <div class="container">
         <div class="row">
             <div class="col-sm-6">
                 <div class="copyright-text">
                     <p>Copyright © 2021 Al-Razi Hospital Pvt. All Rights Reserved
                     </p>
                 </div>
             </div>
             <div class="col-sm-6">
                 <p>
                     Developed by Triva IT Limited (01872128260)
                 </p>
             </div>
         </div>
     </div>
 </section>
 <!-- ====== Footer section2 end ====== -->

 <a class="top-up smooth-s" href="#banner-main">
     <i class="fas fa-chevron-up"></i>
 </a>
 <!--JS link Start-->
 <script src="js/jquery-3.6.0.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/swiper.min.js"></script>
 <script src="js/swiper.js"></script>
 <script src="js/slick.min.js"></script>
 <script src="js/wow.min.js"></script>
 <script src="js/sweetalert.min.js"></script>
 <script src="js/custom.js"></script>
 <script>
     $(document).ready(function() {
         $('body').scrollspy({
             target: ".navbar",
             offset: 40
         });
     });
 </script>
 <script>
     $("#main_submit").click(function() {
         $('#contactform').on('submit', function(e) {
             e.preventDefault();
             var fname = $("#fname").val();
             var email = $("#email").val();
             var phn = $("#phn").val();
             var massg = $("#massg").val();

             if (fname == '' || email == '' || phn == '' || massg == '') {
                 swal({
                     title: "Fields are empty!!!",
                     text: "Please check the missing fields",
                     icon: "warning",
                     button: "Try Again",
                 });
             } else {
                 $.ajax({
                     type: 'post',
                     url: 'mailer.php',
                     data: $('#contactform').serialize(),
                     success: function JSalert() {
                         swal({
                             title: "Succcess",
                             text: "Thanks For sending us a message. We'll get back to you ASAP",
                             icon: "success",
                             button: "Okay",
                         });
                     }
                 });
             }
         });
     });
 </script>
 <!--JS link End-->
 </body>

 </html>