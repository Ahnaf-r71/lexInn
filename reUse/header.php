<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="view/header.css">
<!-- for css --- @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"); -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Inn</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>


<header> 
<!-- header top and login -->
<div class="top-bar">
  <div class="container-fluid d-flex justify-content-between align-items-center py-2 px-5 flex-sm-column flex-lg-row shadow-none">
    <div class="social-icons">
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
    </div>
    <div class="logo mx-auto">
      <img src="image/logoD.png" alt="Luxe Inn" height="60">
    </div>
    <div class="buttons">
      <button type="button" class="btn btn-primary shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
      </button>
      <button type="button" class="btn btn-primary  shadow-none me-lg-2" data-bs-toggle="modal" data-bs-target="#registerModal">
        Register
      </button>
    </div>
  </div>
</div>




    <!-- Modals -->

<!-- LoginModals -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header">
      <i class="bi bi-person-circle px-2"></i><h1 class="modal-title fs-5 d-flex align-items-center" > User Login </h1>  <!-- d-flex align-items-center for centering vertically  -->
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button> <!--button type reset for refreshing after close  -->
      </div>
      <div class="modal-body">
            <form>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-5">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-primary btn-outline-dark shadow-none">Log In</button>
            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
          </form>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- RegisterModals -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"><!--modal-lg for larger input field -->
    <div class="modal-content">
      
      <div class="modal-header">
      <i class="bi bi-person-vcard px-2 align-items-center"></i><h1 class="modal-title fs-5 d-flex align-items-center" > User Register </h1>  <!-- d-flex align-items-center for centering vertically  -->
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button> <!--button type reset for refreshing after close  -->
      </div>
      <div class="modal-body">
            <!--<form>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-5">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-primary btn-outline-dark shadow-none">Log In</button>
            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
          </form>-->
      
        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
          Note: Details Must Match With Your Passport, ID or Driving Liscence for security purpose during check in
        </span>
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6 ">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
            </div>
          
            <div class="col-md-6 ">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control shadow-none">
            </div>
            </div>
            <div class="row">

            <div class="col-md-6 ">
                <label class="form-label">Contact Number</label>
                <input type="text" class="form-control shadow-none">
            </div>
          
            <div class="col-md-6 ">
                <label class="form-label">Picture</label>
                <input type="file" class="form-control shadow-none">
            </div>
            </div>
            <div class="row"> <!-- check bootstrap form control group -->
            <div class="col-md ">
                <label class="form-label">Address</label>
                <textarea class="form-control"  rows="1"></textarea>
            </div>
            </div>

            <div class="row">

            <div class="col-md-6 ">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
            </div>
          
            <div class="col-md-6 ">
                <label class="form-label">Re-Confirm Password</label>
                <input type="password" class="form-control shadow-none">
            </div>

            <div class="text-center">
              <br>
               <button type="submit" class="btn btn-dark shadow-none">Register</button>
            </div>

            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- navbar section from here -->
<nav class="navbar navbar-expand-lg bg-body-tertiary px-lg-5 py-lg-2">
  <div class="container-fluid justify-content-center"> <!-- modified this to center it -->
    <!-- icon section -->
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon burger"></span>
    </button>
    <!-- Main menu items -->
    <div class="collapse navbar-collapse flex-grow-0 " id="navbarSupportedContent"> <!-- flex grow needs to be made 0 else it will take up whole space -->
    <!-- icon section -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
      <li class="nav-item px-3">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Rooms</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="features.php">Features</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Home</a></li>
            <li><a class="dropdown-item" href="#">About Us</a></li>
            <li><a class="dropdown-item" href="#">Rooms</a></li>
            <li><a class="dropdown-item" href="#">Facilities</a></li>
            <li><hr class="dropdown-divider"></li> 
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> 
        </li> -->
        </div>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
        <button class="btn btn-outline-success shadow-none" type="submit">Login</button>
      </form>-->
    </div>
  
</nav>
</header>

</body>
</html>