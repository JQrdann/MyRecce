<?php
    if($_POST['submit']){
        require('connect.php');

        $username = $_POST['username'];
        $password = sha1($_POST['password']);

        $db_query = "SELECT * FROM users WHERE Username = '$username' and Password = '$password'";
        $db_result = mysqli_query($db_connect, $db_query);
        $row = mysqli_fetch_assoc($db_result);
        if(mysqli_num_rows($db_result) > 0){
            session_start();
            $_SESSION['usertype'] = $row['UserType'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['firstName'] = $row['FirstName'];
            $_SESSION['userID'] = $row['ID'];

            header('Location: ../portal/home.php');
        }else{
            header('Location: /index.php');
        }
    }
?>
