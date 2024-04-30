<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      include "head.php"
    ?>

    <title>Contact - Karthikeya Home Interior</title>
    <style media="screen">
      .swiper {
        width: 100%;
        height: 85vh;
      }
      .swiper img {
        width: 100%;
      }
      .swiper-button-next:after, .swiper-button-prev:after {
        font-size: 30px;
        color: #C04B2E;
      }
      .swiper-pagination-bullet-active {
        background-color: #C04B2E;
      }
      .what-we-do-main {
        width: 90%;
        height: auto;
        text-align: center;

      }
    </style>

  </head>
  <body>
   
   <?php
     include "header.php"
   
   ?>

    <!-- contact hero section starts here  -->

    <section class="contact-hero">
      <div class="contact-hero-container">
        <div class="">
          <h1> CONTACT US </h1>
        </div>
        <!-- contact hero container ends here  -->
      </div>
    </section>

    <!-- contact hero section ends here  -->

<section class="contact-main">
  <div class="contact-main-container">
    <div class="contact-left">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.25176871577!2d78.40804555!3d17.4123487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1655184033947!5m2!1sen!2sin" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-right">
      <div class="contact-right-container">
        <div class="contact-1 contact-right-box">
          <ul>
            <li><a href="tel:9959268999"><i class="bi bi-telephone-fill"></i> Call : <br> 9959268999</a></li>
            <li><a><i class="bi bi-envelope-fill"></i> Mail : <br> help@karthikeyahomeinterior.com</a></li>
            <li><a><i class="bi bi-geo-alt-fill"></i> Location : <br>  Flat No. 105, Primes Narayanadri Towers, Vivekananda Nagar colony, Kukatpally, Hyderabad</a></li>
          </ul>
        </div>
        <div class="contact-2 contact-right-box">
          <form class="" action="leads.php" method="post">
            <input type="text" name="name" value=""  placeholder="Name">
             <input type="text" name="phone" value="" placeholder="Phone Number" onkeypress="isInputNumber(event); if(this.value.length==10)  return false; "
      minlength="10" title="10 Digit Valid Number" required/>
            <input type="email" name="email" value=""  placeholder="Email ID">
            <textarea name="message" rows="4" cols="80" placeholder="Message"></textarea>
            <input type="Submit" name="Submit" value="SUBMIT" class="popup-submit">
          </form>
        </div>
      </div>
    </div>

    <!-- contact container ended  -->
  </div>

</section>

  <?php
    include "footer.php";
  ?>

  </body>
</html>
