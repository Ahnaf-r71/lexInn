<?php include("reUse/header.php") ?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Rooms</h2>
    <div class="h-line bg-dark"></div>
    <div class="h-line"></div>
</div>

<div class="container">
    <div class="row">

        <!-- Filter -->
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
            <nav class="navbar navbar-light navbar-expand-lg" style="background-color: aliceblue !important;">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">Filter</h4>
                    <br>
                    <!-- Filter -->
                    <!-- Navbar toggler will appear when screen size is below lg -->
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="filterDropdown">
                        <div class="border bg-light p-3 rounded mb-3 mt-3">
                            <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                            <label class="form-label">
                                Check-In
                                <input type="date" class="form-control shadow-none mb-3">
                            </label>
                            <label class="form-label">
                                Check-Out
                                <input type="date" class="form-control shadow-none">
                            </label>
                        </div>
                    </div>
<!--  -->
                    <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                        <div class="border bg-light p-3 rounded mb-3 mt-3">
                            <h5 class="mb-3" style="font-size: 18px;"></h5>
                                
                                 <div class="mb-2">
                                
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Feature 1</label>

                                </div>
                                <div class="mb-2">
                                
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Feature 2</label>

                                </div>
                                <div class="mb-2">
                                
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Feature 3 </label>

                                </div> 
                        </div>

                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                        <div class="border bg-light p-3 rounded mb-3 mt-3">
                            <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">   
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                        
                                    </div>
                                </div>
                                <!-- <div class="mb-2">
                                
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Feature 1</label>

                                </div>
                                <div class="mb-2">
                                
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Feature 2</label>

                                </div>
                                <div class="mb-2">
                                
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Feature 3 </label>

                                </div> -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Room -->
 <div class="col-lg-9 col-md-12 px-4">
    <!-- Room 1-->
        <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="image/s1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                 <h5 class="mb-3">Simple Room Name</h5>
                 <div class="features mb-3">
                         <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            4 Children
                            </span>
                                        
                            </div>
                                <!-- Feature -->
                                <div class="feature mb-4">
                                
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
                                <!-- FACILITIES -->
                                <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Wifi </span>
                                </div>
                                <!-- Rating -->
                                    <!-- <div class="rating mb-4">
                                        <h6 class="mb-1">Rating</h6>
                                        <span class ="badge rounded-pill bg-light">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        </span>
                                    </div> -->
                                <!-- <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn rooms-bc">Book Now</a>
                                <a href="#" class="btn rooms-bc">More Details</a>
                                </div> -->
                </div>
                
                </div>
                <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">

                 <h6 class="mb-4">200$/night</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" style="background-color:black;">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" style="background-color:black;">More Details</a>

                 </div>
            </div>
        </div>
    <!-- Room 2-->
      
        
 </div>

    </div>
</div>

<?php include("reUse/footer.php") ?>
