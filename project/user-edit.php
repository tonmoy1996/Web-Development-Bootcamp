<?php
session_start();
require_once("db.php");
$user = "";
if(isset($_SESSION["id"]) && $_SESSION["id"]){
    
    if($_SESSION["id"] != 1){
        header("Location: profile.php");
    }
    
    $user_id = $_GET["id"];
    $query   = "select * from users where id='$user_id'";
    $result  = $con->query($query);
    $user    = $result->fetch_assoc();
    
} else{
    header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>User Registration</title>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-4">
            <div class="border border-primary p-2">
                <h4>User Edit</h4>
                <form method="post" action="user-update.php">
                    <input type="hidden" name="user_id" value=<?php echo $user["id"]; ?>>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value=<?php echo $user["name"]; ?>
                        aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value=<?php echo $user["phone"];
                        ?>>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value=<?php echo $user["email"]; ?>>
                    </div>
                    <div class="form-group">
                        <label for="password">Address</label>
                        <textarea class="form-control" name="address"><?php echo $user["address"]; ?></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
