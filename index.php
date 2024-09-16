<link rel="stylesheet" href="view/index.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<div class="heroBanner position-relative">
  <?php include("reUse/header.php") ?>

  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="image/s3.jpg" class="d-block w-100" alt="image/s1.jpg">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center pt-5" style="height: 100%;">
        
        </div>
      </div>

      <div class="carousel-item">
        <img src="image/s4.jpg" class="d-block w-100" alt="image/s2.jpg">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center pt-5" style="height: 100%;">
        
        </div>
      </div>

      <div class="carousel-item">
        <img src="image/s6.jpg" class="d-block w-100" alt="image/s3.jpg">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center pt-5" style="height: 100%;">
         
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!-- check availability -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-13 bg-white shadow p-4 rounded">
      <h5 class ="mb-4">Check Booking Availability</h5> 
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500">Check In</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight:500">Check Out</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500">Adults</label>
                <select class="form-select shadow-none" aria-label="Select No of Adults">
                <option selected>Select No Of Adults</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
          </div>
          <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight:500">Children</label>
                <select class="form-select shadow-none" aria-label="Select No of Children">
                <option selected>Select No of Children</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
          </div>
          <div class="col-lg-1">
                <button type="submit" class="btn text-white shadow-none custom-bc1 mb-lg-3 mt-2">Submit</button>
          </div>
        </div>
      </form> 
    </div>
  </div>
</div>

<!-- Rooms Section -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
 <div class="container rooms ">
 <div class="row">
  <div class="col-lg-4 col-md-6 my-3">
    <!-- cards 1-->
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto; margin-bottom:20px;">
        <img class="card-img-top" src="image/room/room2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Room Name</h5>
          <h6 class="card-title">200$ per night</h6>
            <div class="features mb-4">
              <div class="guests mb-4">
                <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                  </span>
                  
            </div>
          <!-- facilities -->
           <div class="facilities mb-4">
           
                <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bath
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                  </span>
            
           </div>
           <!-- Rating -->
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class ="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn rooms-bc">Book Now</a>
          <a href="#" class="btn rooms-bc">More Details</a>
          </div>
        </div>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-6 my-3">
    <!-- cards -->
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto; margin-bottom:20px;">
        <img class="card-img-top" src="image/room/room2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Room Name</h5>
          <h6 class="card-title">200$ per night</h6>
            <div class="features mb-4">
              <div class="guests mb-4">
                <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                  </span>
                  
            </div>
          <!-- facilities -->
           <div class="facilities mb-4">
           
                <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bath
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                  </span>
            
           </div>
           <!-- Rating -->
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class ="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn rooms-bc">Book Now</a>
          <a href="#" class="btn rooms-bc">More Details</a>
          </div>
        </div>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-6 my-3">
    <!-- cards -->
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto; margin-bottom:20px;">
        <img class="card-img-top" src="image/room/room2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Room Name</h5>
          <h6 class="card-title">200$ per night</h6>
            <div class="features mb-4">
              <div class="guests mb-4">
                <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Children
                  </span>
                  
            </div>
          <!-- facilities -->
           <div class="facilities mb-4">
           
                <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bath
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                  </span>
            
           </div>
           <!-- Rating -->
            <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class ="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
            </div>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn rooms-bc">Book Now</a>
          <a href="#" class="btn rooms-bc">More Details</a>
          </div>
        </div>
    </div>
  </div>
  </div>
  <!-- show more  -->
  <div class ="col-lg-12 text-center mt-5 ">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none rooms-bc">More Rooms</a>
  </div>
  <!-- facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/logo.png" alt="wifi" width="80px my-3">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/logo.png" alt="wifi" width="80px my-3">
        <h5 class="mt-3">Wifi</h5>
      </div><div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/logo.png" alt="wifi" width="80px my-3">
        <h5 class="mt-3">Wifi</h5>
      </div><div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="images/logo.png" alt="wifi" width="80px my-3">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class ="col-lg-12 text-center mt-5 ">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none rooms-bc">More Rooms</a>
      </div>
    </div>
  </div>
 </div>
 </div>

<!-- Testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
<div class="container" style="height:200px">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center ">

        <img src="" alt="" width="30px">
        <h6 class="m-0 ms-2">Random User 1</h6>
        </div>
       
        <p>
          Lorem ipsum dolor sit amet consectetur
           adipisicing elit. Vitae ut modi ad, provident et 
           laboriosam dolorem aspernatur, saepe, temporibus alias quia ullam? 
           Blanditiis eius consequatur qui nihil! Harum, recusandae voluptatum?
        </p>
        <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center ">

        <img src="" alt="" width="30px">
        <h6 class="m-0 ms-2">Random User 1</h6>
        </div>
       
        <p>
          Lorem ipsum dolor sit amet consectetur
           adipisicing elit. Vitae ut modi ad, provident et 
           laboriosam dolorem aspernatur, saepe, temporibus alias quia ullam? 
           Blanditiis eius consequatur qui nihil! Harum, recusandae voluptatum?
        </p>
        <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center">

        <img src="" alt="" width="30px">
        <h6 class="m-0 ms-2">Random User 1</h6>
        </div>
       
        <p>
          Lorem ipsum dolor sit amet consectetur
           adipisicing elit. Vitae ut modi ad, provident et 
           laboriosam dolorem aspernatur, saepe, temporibus alias quia ullam? 
           Blanditiis eius consequatur qui nihil! Harum, recusandae voluptatum?
        </p>
        <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center">

        <img src="" alt="" width="30px">
        <h6 class="m-0 ms-2">Random User 1</h6>
        </div>
       
        <p>
          Lorem ipsum dolor sit amet consectetur
           adipisicing elit. Vitae ut modi ad, provident et 
           laboriosam dolorem aspernatur, saepe, temporibus alias quia ullam? 
           Blanditiis eius consequatur qui nihil! Harum, recusandae voluptatum?
        </p>
        <div class="rating">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <div class="swiper-pagination"></div>
  </div>

</div>
<div class ="col-lg-12 text-center mt-5 ">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none rooms-bc" style="margin-top:-20px;">More Reviews</a>
  </div>

 <!-- Initialize Swiper -->
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "flip",
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
      },
      autoplay: {
      delay: 3000, // Time between slide transitions (3 seconds)
      disableOnInteraction: false, // Continue autoplay after interaction
    },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>



<!-- Contact Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>
<div class="">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.1616070608916!2d114.60890487550274!3d-28.684811975636222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2bda48d136a7980d%3A0xd1e415aeabf6dd6c!2sClipper%20St%2C%20Glenfield%20WA%206532%2C%20Australia!5e0!3m2!1sen!2sbd!4v1726077637238!5m2!1sen!2sbd"
         allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel: +990131312313" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"> </i> +9123912312313</a>

          <a href="tel: +990131312313" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"> </i> +9123912312313</a>
        </div>
        <br>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3  text-dark">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter-x me-1"></i>  Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3  text-dark">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter-x me-1"></i>  Facebook
            </span>
          </a>
          <a href="#" class="d-inline-block mb-3  text-dark">
            <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter-x me-1"></i>  Instagram
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3  text-dark"></a>

          
        </div>
      </div>
    </div>
  </div>
</div>


<?php include("reUse/footer.php") ?>




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>