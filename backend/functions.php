<?php 

    define('DB_SERVER', 'localhost'); // Your hostname
    define('DB_USER', 'root'); // Database Username
    define('DB_PASS', ''); // Database Password
    define('DB_NAME', 'tarkool'); // Database Name

    class DB_con {
        function __construct() {
            $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $con;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }

        public function usernameavailable($a_user) {
            $checkuser = mysqli_query($this->dbcon, "SELECT a_user FROM tbl_admin WHERE a_user = '$a_user'");
            return $checkuser;
        }

        public function registration($a_name, $a_user, $a_pass) {
            $reg = mysqli_query($this->dbcon, "INSERT INTO tbl_admin(a_name, a_user, a_pass) VALUES('$a_name', '$a_user', '$a_pass')");
            return $reg;
        }

        public function signin($a_user, $a_pass) {
            $signinquery = mysqli_query($this->dbcon, "SELECT a_id, a_name FROM tbl_admin WHERE a_user = '$a_user' AND a_pass = '$a_pass'");
            return $signinquery;
        }
    }

?>