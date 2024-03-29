<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/login/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/login/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
      

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../images/welcome.png" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log in</h2>
                        <form method="POST" class="register-form" id="login-form" action="../Actions/login_process.php">
                        <?php
                                    if (isset($_GET["error"]) && $_GET["error"]==3)
                                        echo ' <div class="alert alert-danger" role="alert">You are already registered, please log in<br></div>' ;
                                    if (isset($_GET["error"]) && $_GET["error"]==1)
                                        echo ' <div class="alert alert-danger" role="alert">Password is incorrect, please try again<br></div>' ;

                                    if (isset($_GET["error"]) && $_GET["error"]==2)
                                        echo ' <div class="alert alert-danger" role="alert">You are not registered, please sign up using the button below<br></div>' ;
                                ?>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="../js/login/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>