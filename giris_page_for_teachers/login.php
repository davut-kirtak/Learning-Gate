<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root', '','learning_gate');

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT email,password from teachers where email ='$email' and password = '$password'";

    $sorgu = mysqli_query($conn,$sql);
    $dizi = mysqli_fetch_array($sorgu);

    if ($dizi !=0) {
        header("location:bos.php");
    }
    if ($dizi ==0) {
        echo "error";
    }
}





