<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div> 
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div> 
                    <div class="field input">
                        <input type="submit" name="submit" class="btn" value="Login" required>
                    </div> 
                    <div class="links">
                        Don't have account?<a href="register.php"> Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>