
<?php include("reUseAdmin/components.php"); 
 include("reUseAdmin/db_config.php");
 include("reUseAdmin/adHeader.php");


adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel -Dashboard</title>
    
</head>
<body class="bg-white">

    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0 bg-dark text-light p-3">Admin Pannel</h3>
        <a href="logout.php" class="btn btn-light btn-sm">Log Out</a>
    </div>

    
</body>

<?php 
 include("script/adScript.php");
 ?>
</html>