<?php 
require('include/header.php'); 
?> 
<section id="intro" class="clearfix">
    <div class="container">
     

      <div class="intro-info">
        <h2>Contact Us</h2>
      </div>

    </div>
  </section><!-- #intro -->


<!--==========================
Contact Section
============================-->
<section id="contact">
<div class="container">


  <div class="row wow fadeInUp">
  <div class="col-lg-6">
    

    <div class="form">
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>
      <form name="contactForm" id="contactForm" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-lg-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validation"></div>
          </div>
          <div class="form-group col-lg-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-row">
        <div class="form-group  col-lg-6">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact No:" data-rule="minlen:10" data-msg="Please enter valid Contact No.">
          <div class="validation"></div>
        </div>
        <div class="form-group  col-lg-6">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
          <div class="validation"></div>
        </div>
        </div>
        <div class="form-row">
        
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service1" name="service" value="Web Developemnt">
        <label for="service1"> Web Developemnt</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service2" name="service" value="Mobile App Developemnt">
        <label for="service2"> Mobile App Developemnt</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service3" name="service" value="Cloud Computing">
        <label for="service3">Cloud Computing</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service4" name="service" value="Digital Marketing">
        <label for="service4"> Digital Marketing</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service5" name="service" value="Artificial Intelligence">
        <label for="service5">Artificial Intelligence</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service6" name="service" value="Machine Learning">
        <label for="service6"> Machine Learning</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service7" name="service" value="Internet Of Things">
        <label for="service7">Internet Of Things</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service8" name="service" value="UX/UI Design">
        <label for="service8"> UX/UI Design</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service9" name="service" value="IT Consulting">
        <label for="service9">IT Consulting</label><br>
        </div>
        <div class="form-group  col-lg-6">
        <input type="checkbox" id="service10" name="service" value="Testing And Quality Assurance">
        <label for="service10">Testing And Quality Assurance</label><br>
        </div>
    </div>
        <div class="form-group">
          <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button name="submit" type="submit" title="Send Message">Send Message</button></div>
      </form>
    </div>
  </div>



    <div class="col-lg-6">
      <div class="map mb-4 mb-lg-0">
      
      
      
            <div class=" wow fadeInUp info">
          <i class="ion-ios-location-outline"></i>
        
          <p> <strong>Pune</strong> <br> Atharva Residency, Baner road, Baner Pune - 45 <br> <span>
          +91 967 3954 645
          </span></p>
    
        </div>
        <div class=" wow fadeInUp info">
          <i class="ion-ios-location-outline"></i>
          <p> <strong>Mumbai</strong> <br> Runwal Pearl, D2-1503, Manorma Nagar, Thane (W) 400607<br> <span>
         +91 860 0732 270
          </span></p>
        </div>       <div class=" wow fadeInUp info">
          <i class="ion-ios-location-outline"></i>
          <p> <strong>Trivandrum</strong> <br>Pms building, pnra 28, padmanagar, paruthipara, trivandrum -12<br> <span>
         +91 952 9679 645
          </span></p>  </div>
        
        <div class=" wow fadeInUp info">
        <i class="ion-ios-email-outline"></i>
          <p>info@softezi.com</p>
          <i class="ion-ios-telephone-outline"></i>
          <p>+91 860 0732 432 <br> +91 957 9942 949</p>
        </div>
       

      </div>
    </div>

   

  </div>

</div>
</section><!-- #contact -->












  <?php 
require('include/footer.php'); 
?> 
  