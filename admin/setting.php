<?php 
 include("reUseAdmin/components.php"); 
 include("reUseAdmin/db_config.php");
 include("reUseAdmin/adHeader.php");

 adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - settings</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

    

    <div class="container-fluid id=" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">
                    Settings
                </h3>

                <!-- General Settings Section -->
                <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 mb-3">General Settings</h5>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                        <i class="bi bi-pencil-square"></i>Edit
                        </button>
                    </div>
                    
                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                    <p class="card-text" id="site_about">content.</p>
                    
                </div>
                </div>


                <!-- Modal for Gsettings -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form>
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">General Settings</h5>
                        
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 ">
                        <label class="form-label">Site Title</label>
                        <textarea class="form-control" name="site_title" id="site_title_inp"></textarea>
                        </div>
                        <div class="mb-3 ">
                        <label class="form-label">Site Address</label>
                        <textarea name="site_about" class="form-control" id="site_about_inp"  rows="1"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-dark text-white">Save</button>
                    </div>
                    </div>
                    </form>
                    
                </div>
                </div>


            </div>
        </div>
    </div>

</body>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
let $general_data;

function get_general_data() {
    let site_title =document.getElementById('site_title'); // variable declare
    let site_about=document.getElementById('site_about');
    let site_title_inp =document.getElementById('site_title_inp');
    let site_about_inp=document.getElementById('site_about_inp');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    

    xhr.onload = function () {
        general_data=JSON.parse(this.responseText); //parses the datas below and sends

       site_title.innerText =general_data.site_title;
       site_about.innerText =general_data.site_about;


       site_title_inp.value =general_data.site_title;
       site_about_inp.value =general_data.site_about;
    }

    xhr.send('get_general');
    

}

window.onload =function(){
    get_general_data();
    
}

</script>
<?php 
 include("script/adScript.php");
?>
</html>
