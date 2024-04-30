<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      include "head.php";
    ?>
    <title>Dinning Design - Karthikeya Home Interior</title>
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
<section class="living-room-hero diningroom-hero">
  <div class="living-room-hero-container">
    <div class="living-room-hero-left living-room-hero-box">
      <div class="living-room-hero-overlay"></div>
      <h1>Dining Room Interior Design</h1>
        <p>Better Experience with Your Dining Room Design </p>
      <a href="#dining">KNOW MORE</a>
    </div>
    <div class="living-room-hero-right living-room-hero-box">

    </div>
  </div>
 
</section>


<section class="living-room-what">
   <div class="living-room-whatcontainer" id="dining">
     <div class="living-room-what-left living-room-whatbox">
       <img src="media/diningroom-main.png" alt="">
     </div>
     <div class="living-room-what-right living-room-whatbox">
       <h3>How we bring light up to Your dining room Designing</h3>
       <p>
           At Karthikeya Home Interior, we’ve got a wide range of affordable and stylish Dining Room designs that you’ll love. Our carefully created  Dining Rooom designs come in a variety of styles, color schemes with decor ideas - all of which can be customized to your taste. Whether you’re looking for a contemporary style or a room with rustic sensibilities, we’ve got all the dining room interior design inspiration you’ll need to create a space that reflects your personality and taste.
       </p>
       <a href="./contact-us">Let's Talk</a>
     </div>

   </div>

 </section>
 
  <section class="living-room-feature">
   <h3>Our Bed Room Works</h3>
   
   <div class="works-container">
       
       <div class="responsive">
        <!--1-->
        <div class="slider">
            <img src="media/diningroom/diningroom-1.png">
        </div>
        <!--2-->
        <div class="slider">
            <img src="media/diningroom/diningroom-2.png">
        </div>
        <!--3-->
        <div class="slider">
            <img src="media/diningroom/diningroom-3.png">
        </div>
        <!--4-->
        <div class="slider">
            <img src="media/diningroom/diningroom-4.png">
        </div>
        <!--5-->
       
        
   </div>
   
   </div>

 </section>


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
