<?php
require_once("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "in";
    $name     = $_POST["name"];
    $phone    = $_POST["phone"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
    $address  = $_POST["address"];
    
    $sql =
        "insert into users(name, phone, email, password, address,role_id) values ('$name','$phone','$email','$password','$address',2)";
    if($con->query($sql)){
        echo "Inserted successfully";
    } else{
        echo "failed ";
    }
    
}
