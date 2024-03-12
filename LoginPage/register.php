<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Register</title>
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
                <?php 
                    include("php/config.php");
                    if(isset($_POST["submit"])){
                        $firstname = $_POST["firstname"];
                        $lastname = $_POST["lastname"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                    

                    //verufying the unique email
                    $verify_query = mysqli_query($con,"SELECT Email from users WHERE Email='$email'");
                    if(mysqli_num_rows($verify_query) != 0){
                        echo   "<div class='message'>
                                    <p>This email is used, Try another One Please!</p>
                                </div></br> ";
                        echo "<a href='JavaScript:self.history.back()'><button class='btn'>Go Back</button>";
                    }
                    else{
                        mysqli_query($con," INSERT INTO users(firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')") or die("Error Occured");  
                        echo "<div class='message'>
                                <p>Registration successfully!</p>
                             </div></br> ";
                        echo "<a href='index.php'><button class='btn'> Login Now</button>";
                    }
                    }else{

                    
                ?>
                
                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">First Name</label>
                        <input type="text" name="firstname" id="firstname" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="username">Last Name</label>
                        <input type="text" name="lastname" id="lastname" autocomplete="off" required>
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
            <?php }?>
        </div>
    </body>
</html>