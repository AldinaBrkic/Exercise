<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Change Profile</title>
    </head>
    <body>
        <div class="nav">
            <div class="logo">
                <p><a href="home.php"></a> Logo</p>
            </div>
            <div class="right-links">
                <a href="#">Change Profile</a>
                <a href="logout.php">
                    <button class="btn">Log Out</button>
                </a>
            </div>
            <div class="container">
                <div class="box form-box">
                    <header>Change Profile</header>
                    <form action="" method="post">
                        <div class="field input">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required>
                        </div> 
                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" autocomplete="off" required>
                        </div>
                        <div class="field input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" autocomplete="off" required>
                        </div> 
                        <div class="field input">
                            <input type="submit" name="submit" class="btn" value="Register" required>
                        </div> 
                        <div class="links">
                            Already have an account?<a href="index.php"> Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
    </body>
</html>