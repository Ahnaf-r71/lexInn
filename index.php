<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="view/style.css">
<!-- for css --- @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"); -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxe Inn</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>

<div class="top-bar">
  <div class="container-fluid d-flex justify-content-between align-items-center py-2">
    <div class="contact-info">
      <span>Call Us at: +123 456 7890</span>
      <span>Email Us at: info@luxeinn.com</span>
    </div>
    <div class="logo">
      <img src="image/Luxlogo.png" alt="Luxe Inn" height="50">
    </div>
    <div class="social-icons">
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
    </div>
  </div>
</div>

<!-- navbar section from here -->
<nav class="navbar navbar-expand-lg bg-body-tertiary px-lg-5 py-lg-2  sticky-top">
   <div class="container-fluid justify-content-center"> <!-- modified this to center it -->
    <!-- icon section -->
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Main menu items -->
    <div class="collapse navbar-collapse flex-grow-0 " id="navbarSupportedContent"> <!-- flex grow needs to be made 0 else it will take up whole space -->
    <!-- icon section -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
      <li class="nav-item px-3">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Rooms</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Facilities</a>
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
  </div>
</nav>
</body>
</html>