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
        <header>
            <a href='#'><img class='header-logo' src="images/myrecce.png" alt="MyRecce-Logo"></a>
            <div class="header-buttons">
                <a href='#' class="button login-button">Login</a>
                <a href='#' class="button register-button">Sign Up</a>
            </div>
        </header>

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
                    <h2 class="signup-text">Sign Up</h2>
                    <br>

                    <h5 class="signupchat">What's your electronic mail address?</h5>
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

        <div class="section-one">
          <div class="main-background">
          </div>

          <div class="mapdiv">
               <a href='#'><img class='ukmap' src="images/map.png" alt="ukmap"></a>
          </div>

          <div class="main-title">
              <h1>WE HAVE SETUP SHOP, IN THE UK!</h1>
              <a href='#'><img class='logo' src="images/myrecce.png" alt="MyRecce-Logo"></a>

            <div class="main-buttons">
              <a href='#' class="button login-button">Login</a>
              <a href='#' class="button plop register-button">Sign Up</a>
            </div>

            <div class="down-arrow">
              <a href='#'><img src="images/down-arrow.png" alt="down-arrow" height="70" width="70"></a>
            </div>

          </div>

        </div>

        <!-- SECTION SEPERATOR -->

        <div class="section-two">
            <h1 class="two-title">Say Hello to your favourite location scout!</h1>
            <h3 class="two-desc">MyRecce is your best pal' when it comes to finding that badass location.</h3>
            <h3 class="two-desc2">We’re a couple of chaps who sat down one day and decided it’d be a great idea to aid the nightmare that is location scouting.</h3>
        </div>

        <!-- SECTION SEPERATOR -->

        <div class="section-three">
            <div class="locprov">
                <h2>Location Account</h2>
                <p>Home owner? Business owner? Heck, Land owner?</p>
                <p>Whatever you are, post your location to MyRecce for Creators to use and possibly earn an extra buck or two!</p>

                <div class="locprov-list">
                    <ul style="list-style-type:none">
                    <img class='locprov-icons' src="images/post.png" alt="award2"><li>Post your location for free!</li>
                    <img class='locprov-icons' src="images/business.png" alt="award2"><li>Choose the cost and times</li>
                    <img class='locprov-icons' src="images/income.png" alt="award2"><li>Generate an additional income</li>
                    </ul>
                </div>
            </div>

            <div class="creator">
                <h2>Creator Account</h2>
                <p>Got an idea for a sweet film? Some stunning portrait photographs?</p>
                <p>Whatever it is, get yourself signed up to MyRecce and find that picture perfect location!</p>

                <div class="creator-list">
                    <ul style="list-style-type:none">
                    <img class='creator-icons' src="images/search.png" alt="award2"><li>Search through locations for free!</li>
                    <img class='creator-icons' src="images/wifi.png" alt="award2"><li>See location's available features</li>
                    <img class='creator-icons' src="images/eyepop.png" alt="award2"><li>More <b><i>eye popping</i></b> features coming soon!</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SECTION SEPERATOR -->

        <div class="footer">
            <div class='footer-one footer-element'>
                <a target="_blank" href="http://www.facebook.com/myrecce"><img class='facebook-logo' src="images/facebook[white].png" alt="Facebook" style="width:40px;height:40px;"></a>
                <a target="_blank" href="http://www.twitter.com/myrecce"><img class='twitter-logo' src="images/twitter[white].png" alt="Twitter" style="width:40px;height:40px;"></a>
                <a target="_blank" href="http://www.instagram.com/myrecce"><img class='instagram-logo' src="images/instagram[white].png" alt="Instagram" style="width:40px;height:40px;"></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCCUJJ3Je_TT0kukI6ZFtZWA"><img class='youtube-logo' src="images/youtube[white].png" alt="Youtube" style="width:40px;height:40px;"></a>
            </div>

            <div class="footer-two footer-element">
                <h5>Copyright MyRecce © 2017</h5>
            </div>

            <div class="footer-three footer-element">
                <a target="_blank" href="http://www.facebook.com/myrecce"><img class='jamesandjack-logo' src="images/logoconcept.png" alt="James & Jack Films" style="width:155px;height:60px;"></a>
            </div>
        </div>
    </body>
</html>
