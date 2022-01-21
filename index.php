<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: user.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login - MartPlace</title>
</head>

<body>
    <section>

        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>

        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Login Form</h2>
                    <form action="" method="POST">
                        <!-- <div class="alerts">
                            <div class="succ">Succes</div>
                            <div class="wrong">Wrong</div>
                        </div> -->
                        <div class="inputBox">
                            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Password" name="password" value='<?php echo $_POST['password']; ?>' required>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login" name="submit" required>
                        </div>
                        <p class="forget">Forgot password ? 
                            <a href="#">
                                Click Here
                            </a>
                        </p>
                        <p class="forget">Don't have an account ? 
                            <a href="signup.php">
                                Sign up
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <script src="js/main.js"></script>

</body>

</html>