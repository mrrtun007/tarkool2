<?php 

    include_once('functions.php');

    $usernamecheck = new DB_con();

    // Getting post value
    $a_user = $_POST['username'];

    $sql = $usernamecheck->usernameavailable($a_user);

    $num = mysqli_num_rows($sql);

    if ($num > 0) {
        echo "<span style='color: red;'>Username already associated with another account.</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    } else {
        echo "<span style='color: green;'>Username available for registration.</span>";
        echo "<script>$('#submit').prop('disabled', false);</script>";
    }

?>
