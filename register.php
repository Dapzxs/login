<?php
include "koneksi.php";

if (isset($_POST ["submit"])){
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $num = $_POST["number"];

    $sql = "INSERT INTO users(email,pass,num) VALUES ('$email','$pass','$num')";
    $result = mysqli_query($conn,$sql);

    if ($result){
        header("location:home.html");
    }
    else {
        die(mysqli_errno($conn));
    }
}
?>