<link rel="stylesheet" href="view/index.css">
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
  <div class="col-lg-4 col-md-6">
    <!-- cards 1-->
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto; margin-bottom:20px;">
        <img class="card-img-top" src="image/room/room2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Room Name</h5>
          <h6 class="card-title">200$ per night</h6>
            <div class="features mb-4">
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
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
          
          <a href="#" class="btn rooms-bc">Go somewhere</a>
        </div>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <!-- cards -->
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto; margin-bottom:20px;">
        <img class="card-img-top" src="image/room/room2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Room Name</h5>
          <h6 class="card-title">200$ per night</h6>
            <div class="features mb-4">
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
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
          
          <a href="#" class="btn rooms-bc">Go somewhere</a>
        </div>
    </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <!-- cards -->
    <div class="card border-0 shadow" style="max-width: 350px; margin:auto; margin-bottom:20px;">
        <img class="card-img-top" src="image/room/room2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Room Name</h5>
          <h6 class="card-title">200$ per night</h6>
            <div class="features mb-4">
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
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
          
          <a href="#" class="btn rooms-bc">Go somewhere</a>
        </div>
    </div>
  </div>
  </div>
  <!-- show more  -->
  <div class ="col-lg-12 text-center mt-5 ">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-2 fw-bold shadow-none rooms-bc">More Rooms</a>
  </div>

 </div>
 </div>
<br><br><br><br><br>

