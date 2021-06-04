<?php 

    session_start();

    if ($_SESSION['a_id'] == '') {
        header("location: signin.php");
    }else{

        include("backend/admin.php");
    }

?>
