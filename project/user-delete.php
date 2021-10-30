<?php
session_start();
require_once("db.php");
$user_id = $_GET["id"];

$query = "delete from users where id='$user_id'";

if($con->query($query)){
    $_SESSION["msg"] = "Successfully Deleted";
    header("Location:user-index.php");
} else{
    echo "Error";
}
