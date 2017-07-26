<?php
    if($_POST['submit']){
        require('connect.php');

        $username = $_POST['username'];
        $email = $_POST['email'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $password = sha1($_POST['password']);
        $usertype = $_POST['usertype'];
        $valid = true;

        $db_query = "SELECT * FROM users WHERE Username = '$username'";
        $db_result = mysqli_query($db_connect, $db_query);

        if(mysqli_num_rows($db_result) > 0){
            echo "Username taken";
            $valid = false;
        }

        $db_query = "SELECT * FROM users WHERE Email = '$email'";
        $db_result = mysqli_query($db_connect, $db_query);

        if(mysqli_num_rows($db_result) > 0){
            echo "Email taken";
            $valid = false;
        }

        if($valid){
            $db_query = "INSERT INTO `users` (`Username`, `Email`, `FirstName`, `LastName`, `Password`, `UserType`) VALUES ('$username', '$email', '$firstname', '$lastname', '$password', '$usertype')";
            mysqli_query($db_connect, $db_query);

            echo 'Registration completed. You will be redirected in 10 or <a href="login.php">login</a>';
        }
    }
?>
