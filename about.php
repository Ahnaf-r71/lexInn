<?php include("reUse/header.php")  ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    .aboutBox:hover{

        border-color: black !important;

    }
</style>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">About Us</h2>
<p class="text-center  px-5" style="">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates similique, et pariatur voluptas expedita accusamus quasi quae ratione saepe inventore<br>
     nam omnis reprehenderit dolorem dignissimos necessitatibus in! Necessitatibus, est earum.
</p>

 <div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 mx-2 order-lg-1 order-md-1 order-2">
            <h3>
                Korananenaknfjkancajkndjkandjkandan
            </h3>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. En
            <br>im illo recusandae tenetur ab, blanditiis, voluptates totam, in soluta eos fuga commodi modi. Et quo aliquid quod saepe sequi nesci
            unt minus.
        </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1 mt-3">
            <img src="image/s6.jpg" alt="" class="w-100"/>

        </div>
    </div>
 </div>

 <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutBox">
            <img src="image/s6.jpg" alt="" width="70px" />
            <h4 class="mt-3">100+ hours</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutBox">
            <img src="image/s6.jpg" alt="" width="70px" />
            <h4 class="mt-3">100+ hours</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutBox">
            <img src="image/s6.jpg" alt="" width="70px" />
            <h4 class="mt-3">200+ customers</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutBox">
            <img src="image/s6.jpg" alt="" width="70px" />
            <h4 class="mt-3">100+ hours</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutBox">
            <img src="image/s6.jpg" alt="" width="70px" />
            <h4 class="mt-3">100+ hours</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutBox">
            <img src="image/s6.jpg" alt="" width="70px" />
            <h4 class="mt-3">100+ hours</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutBox">
            <img src="image/s6.jpg" alt="" width="70px" />
            <h4 class="mt-3">100+ hours</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center aboutBox">
            <img src="image/s6.jpg" alt="" width="70px" />
            <h4 class="mt-3">100+ hours</h4>
            </div>
        </div>
     
 </div>
</div>
 <!-- team -->

 <h3 class="my-5 fw-bold h-font text-center">
    Meet Our Team
 </h3>


 
  <!-- Swiper -->
<div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center overflow-hidden">
        <img src="image/people/CEO.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide">
        <img src="image/people/CEO.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide">
        <img src="image/people/CEO.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide">
        <img src="image/people/CEO.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide">
        <img src="image/people/CEO.jpg" class="w-100">
        <h5 class="mt-2">Random Name</h5>
      </div>
    </div>
    
    <div class="swiper-pagination"></div>
  </div>
</div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      slidesPerView: 3,
      centeredSlides: true,
      loop: true,  // Enable loop
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints:{
        576:{
          slidesPerView: 1,
        },
        768:{
          slidesPerView: 2,
        },
        992:{
          slidesPerView: 3,
        },
        1200:{
          slidesPerView: 3,
        }
      }
    });
</script>

 
<?php include("reUse/footer.php")  ?>











