<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <?php include("reUseAdmin/db_config.php")?>
    <?php include("reUseAdmin/components.php")?>
    <?php include("reUseAdmin/adHeader.php")?>
    <style>
        div.login-form{
        position: absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        width:400px;
    }
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST"> <!--imp-->
            <h4 class="bg-dark text-white py-3">Admin Login Pannel</h4>
            <div class="p-4">
                <div class="mb-3">
                
                <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-5">
                
                <input name="admin_password" required type="password" class="form-control shadow-none text-center" placeholder ="password">
                </div>

                <button name= "login" type="submit" class="btn text-white shadow-none" style="background-color:black;">Login</button>

            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['login'])) //from button named login
    {
        $frm_data=filtration($_POST);
        // print_r($_POST); //testing line
       // print_r($frm_data); //testing line
       //echo"<h1>$frm_data[admin_name]</h1>";//testing line
       //echo"<h1>$frm_data[admin_password]</h1>";//testing line
       $query="SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?"; // `` backtick for table / column name single quote '' for value
       $values = [$frm_data['admin_name'],$frm_data['admin_password']]; //var can be diff named
    //    $datatypes="ss"; //s s denoth=es both are string
      $res= select($query,$values,"ss");//can also be written as  select($query,$values,$datatypes); functionality in db_config
    ///^^^ This $res is different from the one in db_config
    print_r($res);
    if($res->num_rows==1){
        // echo "got user";
        $row = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['adminLogin']=true; //instead of admin_login or adminId write anything but row name must be same as db
        $_SESSION['adminId']=$row['sr_no'];
        redirect('dashboard.php');
        

    }
    else{
        // echo <<<alert
        // <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        //   <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span>
        //   </button>
        // </div>
        // alert;
        alert('error','Login Failed, Password or Admin Name is incorrect');
    }
    }

    
    ?>
    <?php include("script/adScript.php")?> 


</body>
</html>


