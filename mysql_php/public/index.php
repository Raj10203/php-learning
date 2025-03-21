<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/index.css" />
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="/mysql_php/pages/login/login.php" method="post" class="sign-in-form" id="sign-in-form">
                <h2 class="title">MASH</h2>
                <div class="invalid-credentials">
                    <?php
                    if (isset($_SESSION['invalid-credentials'])) {
                        echo $_SESSION['invalid-credentials'];
                    }

                    ?>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Email Or UserName" name="emailOrUserName" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required />
                </div>
                <div class="last-text">
                    <div>
                        <input type="checkbox" id="remember-me" placeholder="Password" />
                        <label for="remember-me">Remember me
                        </label>
                    </div>
                    <a href="#">
                        forget password
                    </a>
                </div>
                <input type="submit" value="Login" class="btn" />
            </form>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="/mysql_php/assets/js/index.js"></script>

</html>