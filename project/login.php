<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-4">
            <div class="border border-primary p-2">
                <h4>Login</h4>
                
                <?php if(isset($_SESSION["email_error"]) && $_SESSION["email_error"]){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION["email_error"]; ?>
                    </div>
                <?php } ?>
                
                <?php if(isset($_SESSION["password_error"]) && $_SESSION["password_error"]){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION["password_error"]; ?>
                    </div>
                <?php } ?>
                
                <?php if(isset($_SESSION["error_msg"]) && $_SESSION["error_msg"]){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION["error_msg"]; ?>
                    </div>
                <?php } ?>
                
                <form method="post" action="user-check.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                               aria-describedby="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
