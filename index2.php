<!DOCTYPE html>
<html>
    <head>
        <title>MyRecce</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="main.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="icon" type="image/ico" href="favicon.ico"/>
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/js.js"></script>
    </head>
    <body>
        <section id="side">
            <div class="sidebar">
                <div class="sidebar-items">
                    <nav>
                        <ul>
                            <li><a href="#welcome" class="items">WELCOME</a></li><br><br>
                            <li><a href="#what" class="items">WHAT IS MYRECCE</a></li><br><br>
                            <li><a href="#contact" class="items">GET IN TOUCH</a></li><br><br>
                        </ul>
                    </nav>
                </div>
                <div class="sidebar-buttons">
                    <a href='#' class="button login-button">LOG IN</a>
                    <a href='#' class="button register-button">SIGN UP</a>
                </div>
            </div>
        </section>

        <section id="form">
            <div class="form-holder">
                <div class="login-signup-wrapper">
                    <form class="login-form" action="auth/login.php" method="POST"><br>
                        <a href="#" class="close-modal-login">X</a>
                        <h2 class="login-text">Login</h2>

                        <input type="username" required name="username" placeholder="Username"><br>

                        <input type="password" required name="password" placeholder="Password"><br>

                        <a class="register-text register-change" href="#">Sign up</a>

                        <input type="submit" name="submit" value="Go go go!">
                    </form>

                    <form class="signup-form" action="auth/signup.php" method="POST">
                        <a href="#" class="close-modal-signup">X</a>
                        <h2 class="signup-text">Sign Up</h2><br>

                        <h5 class="signupchat">What's your email address?</h5>
                        <input type="email" name="email" required placeholder="Email"><br>

                        <h5 class="signupchat">My first name is James. What's yours?</h5>
                        <input type="firstName" name="firstName" required placeholder="First Name"><br>

                        <h5 class="signupchat">Pick a password. Don't tell anyone, ovbs!</h5>
                        <input type="password" name="password" required placeholder="Password"><br>

                        <a class="login-text login-change" href="#">Login</a>

                        <input type="submit" name="submit" value="Sign up">
                    </form>

                </div>
            </div>
        </section>

        <section id="welcome">
            <div class="welcomesec">
                <h1>MYRECCE</h1>
                <p>THE BEST WAY TO FIND LOCATIONS FOR ANYTHING, ANYTIME</p>
            </div>
        </section>

        <section id="what">
            <div class="whatsec">
                <h1>SECTION TWO</h1>
            </div>
        </section>

        <section id="contact">
            <div class="contactsec">
                <h1>SECTION THREE</h1>
            </div>
        </section>

    </body>
</html>
