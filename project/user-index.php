<?php
session_start();
require_once("db.php");
$query = "select users.*, roles.name as role_name from users inner join roles on users.role_id = roles.id";

$users = $con->query($query);

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
    <title>Admin Page</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="user-index.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <?php if(isset($_SESSION["msg"]) && $_SESSION["msg"]){ ?>
        <div class="alert alert-success mt-2" role="alert">
            <?php echo $_SESSION["msg"]; ?>
        </div>
    <?php } ?>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Role</th>
                <th scope="col text-center" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $users->fetch_assoc()){ ?>
                <tr>
                    <td> <?php echo $row["name"]; ?></td>
                    <td> <?php echo $row["phone"]; ?></td>
                    <td> <?php echo $row["email"]; ?></td>
                    <td> <?php echo $row["address"]; ?></td>
                    <td> <?php echo $row["role_name"]; ?></td>
                    <td><a class="btn btn-primary" href="user-edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                    <td><a class="btn btn-danger" href="user-delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>