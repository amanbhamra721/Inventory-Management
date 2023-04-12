<?php

function checkLogin($conn){
    if(isset($_SESSION['txtEmail'])){
        $txtEmail = $_SESSION['txtEmail'];
        $query = "SELECT * FROM `userdb_asset_management` WHERE email = '$txtEmail' limit 1";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result)>0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // Redirect to login
    header("Location: login.php");
    die;
}