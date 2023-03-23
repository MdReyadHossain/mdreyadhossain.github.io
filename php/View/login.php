<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <link rel="stylesheet" href="../../css/loginStyle.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <?php
                if(isset($_COOKIE['msg'])) {
                    echo $_COOKIE['msg'];
                }
            ?>
            <form action="../Controller/loginAction.php" method="POST">
                <fieldset>
                    <legend><h2>Login</h2></legend>
                    <label for="password">Password</label><br>
                    <input class="form-control" type="password" name="password">
                    <br>
                    <input type="submit" name="submit" id="submit-btn" value="Log in">
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>