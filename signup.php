<?php 

include 'config.php';

error_reporting(0);

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration Compited.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
                echo "<script>alert('Woops! Email ALready Exists.')</script>";
            }
     }else {
        echo "<script>alert('Password Not Matched.')</script>";
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
    <title>Sign Up - MartPlace</title>
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
                    <h2>Sign up Form</h2>
                    <form action=""  method="POST">

                        <!-- <div class="alerts">
                            <div class="succ">Succes</div>
                            <div class="wrong">Wrong</div>
                        </div> -->

                        <div class="inputBox">
                            <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                        </div>
                        <div class="inputBox">
                            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Password" name="password" value='<?php echo $_POST['password']; ?>'>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Confirm Password" name="cpassword" value='<?php echo $_POST['cpassword']; ?>' required>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Sign up" name="submit">
                        </div>
                        <p class="forget">Have an account ? 
                            <a href="index.php">
                                Login Here
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