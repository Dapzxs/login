<?php
include "koneksi.php";

if (isset($_POST ["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND pass ='$pass'";
    $result = mysqli_query($conn,$sql);

    if ($result){
        header("location:home.html");
    }
    else {
        die(mysqli_errno($conn));
    }
}
?>