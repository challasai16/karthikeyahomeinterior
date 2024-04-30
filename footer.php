<!-- footer section starts here  -->
<section class="footer-main">
  <div class="footer-container">
    <div class="footer-top">
      <img src="./media/karthikeya-home-logo.svg" alt="">
      <p>Interior Design | Bed Room Design | Kitchen Design | Living Room Design | Balcony Design</p>
      <div class="footer-social">
       <a href="https://www.facebook.com/KarthikeyaHomeInterior" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/karthikeyahomeinterior" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://twitter.com/karthikeya_home" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://www.linkedin.com/company/karthikeyahomeinterior" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href=" https://wa.me/9959268999"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>
    <!-- top closed  -->
    <div class="footer-middle">
      <div class="footer-middle-container">
        <div class="footer-box footer-1">
          <h4>Company</h4>
          <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./about-us">About Us</a></li>
            <li><a href="./contact-us">Contact Us</a></li>
            <li><a href="./privacy-policy">Privacy & Policy</a></li>
          </ul>
        </div>
        <div class="footer-box footer-2">
          <h4>Services</h4>
          <ul>
            <li><a href="./bedroom-design">Bed Room Design</a></li>
            <li><a href="./living-room-design">Living Room Design</a></li>
            <li><a href="./kitchen-design">Kitchen Design</a></li>
            <li><a href="./balcony-design">Balcony Design</a></li>
          </ul>
        </div>
        <div class="footer-box footer-3">
          <h4>Get In Touch</h4>
          <ul>
            <li><a href="tel:9959268999">Call : 9959268999</a></li>
            <li><a href="mailto:help@karthikeyahomeinterior.com/">Mail : help@karthikeyahomeinterior.com</a></li>
            <li><a>Location : Flat No. 105, Primes Narayanadri Towers, Vivekananda Nagar colony, Kukatpally, Hyderabad</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- bottom closed  -->
      <div class="footer-bottom">
        <p>All Copyright reserved by Karthikeya Home Interior | Designed & Developed By <a href="https://madworks.in" target="_blank">MAD Works.</a></p>
      </div>
    <!-- container close here -->
    </div>
</section>


<!-- footer section ends here  -->
 <!--jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--slick slider js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   
    <script>
        $('.slider-main').slick( {
            nextArrow: '<i class="bi bi-chevron-compact-right"></i>',
            prevArrow: '<i class="bi bi-chevron-compact-left"></i>',
        });
    </script>
    
    <script>
      function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);

        if (!/^[0-9]$/.test(ch)) {
          evt.preventDefault();
        }
      }
    </script>
    <!-- Initialize Swiper -->
    <script>
     var swiper = new Swiper(".mySwiper", {
       slidesPerView: 1,
       spaceBetween: 30,
       loop: true,
       pagination: {
         el: ".swiper-pagination",
         clickable: true,
       },
       navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
       },
     });
     const scrollContainer = document.querySelector(".our-works-container");

      scrollContainer.addEventListener("wheel", (evt) => {
          evt.preventDefault();
          scrollContainer.scrollLeft += evt.deltaY;
      });
      
   </script>
   <script type="text/javascript" src="js/popup.js"></script>
   <script type="text/javascript" src="js/script.js"></script>
   <!--<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>-->
     <script>
    AOS.init();
    </script>