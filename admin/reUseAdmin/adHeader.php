<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/admin.css">







<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 bg-dark text-light p-3">Lux Inn Admin Panel</h3>
        <a href="logout.php" class="btn btn-light btn-sm">Log Out</a>
    </div>

    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
    <nav class="navbar navbar-dark navbar-expand-lg text-white">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">Admin</h4>
                    <br>
                    <!-- Filter -->
                    <!-- Navbar toggler will appear when screen size is below lg -->
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="adminDropdown">
                        <ul class="nav nav-pills flex-column">
                            
                            <li class="nav-item">
                                <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="setting.php">Settings</a>
                            </li>
                            
                        </ul>
                        </div>
                </div>
            </nav>
    </div>