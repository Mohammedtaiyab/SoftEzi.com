       <!--==========================
          Footer
        ============================-->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-md-5 footer-info">
                             <a href="index.html" class="scrollto"><img style="margin-bottom: 20px;width: 34%;" src="img/logo-white.png" alt="" class="img-fluid"></a>
                            <p>
                              We are a Software Development Company in Pune priding itself on our Website Development services. Our experts help you make a statement by designing and maintaining an attractive and sophisticated platform built to attract more business your way, be it in the form of a website or a mobile application
                            </p>
                          

                        </div>

                        <div class="col-lg-3 col-md-3 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="">About us</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Clients </a></li>
                                <li><a href="">Blogs</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-4 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                               <!-- A-102, Meghmalhar Complex, Above Maratha Hotel Cannought, N 5, Cidco, Aurangabad, Maharashtra 431003<br> -->
                               <strong>Phone:</strong> +91 860 0732 432 / 957 9942 949<br>
                                <strong>Email:</strong> info@SoftEzi.com<br>
                            </p>

                            <div class="social-links">
                              
                                <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
                                
                                <a href="" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>

                        </div>

                      

                    </div>

                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><a href="index.html" style="color:white;">SoftEzi
                </div>
            </div>
               <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </footer>
    
     
      
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/mobile-nav/mobile-nav.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.js"></script>
        <!-- Contact Form JavaScript File 
        <script src="contactform/contactform.js"></script>-->

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
        <!--For modal-->
  
        <!--finished-->
   <!--For Read More Button-->
   <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
<script>var options = {
  accessibility: true,
  prevNextButtons: true,
  pageDots: true,
  setGallerySize: false,
  arrowShape: {
    x0: 10,
    x1: 60,
    y1: 50,
    x2: 60,
    y2: 45,
    x3: 15
  }
};

var carousel = document.querySelector('[data-carousel]');
var slides = document.getElementsByClassName('carousel-cell');
var flkty = new Flickity(carousel, options);

flkty.on('scroll', function () {
  flkty.slides.forEach(function (slide, i) {
    var image = slides[i];
    var x = (slide.target + flkty.x) * -1/3;
    image.style.backgroundPosition = x + 'px';
  });
});
var elem = document.querySelector(".carousel-container");
var flkty = new Flickity(elem, {
  // options
  cellAlign: "right",
  contain: true,
  initialIndex: 0,
  pageDots: false,
  wrapAround: true,
  autoPlay: 4000,
  draggable: true,
  prevNextButtons: false,
  pauseAutoPlayOnHover: false
});
</script>
<script>
  	/**********************/
	/*	Client carousel   */
	/**********************/
	$('.carousel-client').bxSlider({
		auto: true,
	    slideWidth: 234,
	    minSlides: 2,
	    maxSlides: 5,
	    controls: false
	});
</script>
    </body>
</html>