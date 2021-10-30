<?php
session_start();
require_once("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_id = $_POST["user_id"];
    $name    = $_POST["name"];
    $phone   = $_POST["phone"];
    $email   = $_POST["email"];
    $address = $_POST["address"];
    
    $query = "update users set name='$name',email='$email',phone='$phone', address='$address' where id='$user_id'";
    
    if($con->query($query)){
        $_SESSION["msg"] = "Successfully Updated";
        header("Location:user-index.php");
    } else{
        echo "Error";
    }
    
}