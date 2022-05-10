<?php
include'header.php';?>
   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner3.jpg)">
      <div class="banner-text">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="banner-heading">
                     <h1 class="banner-title">İletişim</h1>
                     <ol class="breadcrumb">
                        <li>Anasayfa/li>
                        <li><a href="#">İletişim</a></li>
                     </ol>
                  </div>
               </div><!-- Col end -->
            </div><!-- Row end -->
         </div><!-- Container end -->
      </div><!-- Banner text end -->
   </div><!-- Banner area end --> 


  <section id="main-container" class="main-container">
      <div class="container">

         <div class="row text-center">
            <h2 class="section-title">Adres</h2>
            <h3 class="section-sub-title">Lokasyon</h3>
         </div><!--/ Title row end -->

         <div class="row">
            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-map-marker"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Ziyaret edin</h4>
                     <p><?php echo $ayarcek['adres']?></p>
                 </div>
               </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-envelope"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Mail atın</h4>
                     <p><?php echo $ayarcek['email']?></p>
                 </div>
               </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
               <div class="ts-service-box-bg text-center">
                  <span class="ts-service-icon icon-round">
                     <i class="fa fa-phone-square"></i>
                  </span>
                  <div class="ts-service-box-content">
                     <h4>Arayın</h4>
                     <p><?php echo $ayarcek['telefon']?></p>
                 </div>
               </div>
            </div><!-- Col 3 end -->

         </div><!-- 1st row end -->

         <div class="row">

            <div class="col-md-12">
               
               <h3 class="column-title">Bize Ulaşın</h3>

               <form id="contact-form" action="contact-form.php" method="post" role="form">
                  <div class="error-container"></div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>İsim</label>
                        <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Email</label>
                           <input class="form-control form-control-email" name="email" id="email" 
                           placeholder="" type="email" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Konu</label>
                           <input class="form-control form-control-subject" name="subject" id="subject" 
                           placeholder="" required>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Mesaj</label>
                     <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                  </div>
                  <div class="text-right"><br>
                     <button class="btn btn-primary solid blank" type="submit">Gönder</button> 
                  </div>
               </form>
            </div>
         
         </div><!-- Content row -->
      </div><!-- Conatiner end -->
   </section><!-- Main container end -->
	
<?php include'footer.php'; ?>