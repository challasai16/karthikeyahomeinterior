<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      include "head.php";
    ?>
    <title>Living Room Design - Karthikeya Home Interior</title>
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
      include "header.php";
    ?>
 <!-- living room hero started  -->
<section class="living-room-hero">
  <div class="living-room-hero-container">
    <div class="living-room-hero-left living-room-hero-box">
      <div class="living-room-hero-overlay"></div>
      <h1>Living Room Interior Design</h1>
      <p>Better Experience with Your Living Room</p>
      <a href="#livingroom">KNOW MORE</a>
    </div>
    <div class="living-room-hero-right living-room-hero-box">

    </div>
  </div>
</section>
 <!-- living room hero closed  -->
 <!-- How we bring light up to Your living room Designing -->

 <section class="living-room-what">
   <div class="living-room-whatcontainer" id="livingroom">
     <div class="living-room-what-left living-room-whatbox">
       <img src="media/what-living-room.png" alt="">
     </div>
     <div class="living-room-what-right living-room-whatbox">
       <h3>How we bring light up to Your living room Designing</h3>
       <p>At Karthikeya Home Interior, we take pride in our years of experience with modular kitchen designs - the perfect blend of functioning and style. Our curated designs range from simple kitchen designs to modern modular kitchens that can be customized to fit your existing space. We also have designs that work for all shapes: Be it L-shaped kitchen, U-shaped kitchen to straight, parallel or open designs, crafting a kitchen design that best works for your needs and space is our goal. Browse through the designs to transform your kitchen today.</p>
       <a href="./contact-us">Let's Talk</a>
     </div>

   </div>

 </section>

<section class="living-room-feature">
   <h3>Our Living  Room Works</h3>
   
   <div class="works-container">
       
       <div class="responsive">
        <!--1-->
        <div class="slider">
            <img src="media/living-room/living-room-1.png">
        </div>
        <!--2-->
        <div class="slider">
            <img src="media/living-room/living-room-2.png">
        </div>
        <!--3-->
        <div class="slider">
            <img src="media/living-room/living-room-3.png">
        </div>
        <!--4-->
        <div class="slider">
            <img src="media/living-room/living-room-4.png">
        </div>
        <!--5-->
        
   </div>
   
   </div>

   <?php
     include "footer.php";
   ?>
    <script>
     $('.responsive').slick({
          dots: false,
          infinite: true,
          speed: 300,
          slidesToShow: 4,
          autoplay: true,
          slidesToScroll: 1,
          nextArrow: '<i class="bi bi-chevron-compact-right slide-right"></i>',
prevArrow: '<i class="bi bi-chevron-compact-left slide-left"></i>',
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
   </script>
   
  </body>
</html>
