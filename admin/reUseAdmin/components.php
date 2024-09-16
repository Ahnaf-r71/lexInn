
<?php 


function adminLogin() {

    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)) {
        echo"
        <script>window.location.href='index.php';</script>";
    }
}

function redirect($url){

    echo"
    <script>window.location.href='$url';</script>";

}

function alert($type,$msg)
    {
        $bs_class = ($type =="success") ? "alert-success" : "alert-danger";
        echo <<<alert
        <div class="alert $bs_class  alert-dismissible fade show custom-alert text-center" role="alert">
          <strong>$msg</strong> You should re-check in on some of those info below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        alert;
    }
?>