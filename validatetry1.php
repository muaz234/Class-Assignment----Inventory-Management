<?php
     session_start();
     if(empty($_POST['ID']) && empty($_POST['password'])){
        header("location:logintry1.php?error=1"); }
     else {
            $login = $_POST['ID'];
            $password = $_POST['password'];

     if($login == 'mira' && $password == 'ali')
     {
        $_SESSION['ID'] = $login;  $_SESSION['password'] = $password;
        header("location:menutry1.php");
     }
     else if($login == 'zimbabwe' && $password == 'we')
     {
        $_SESSION['ID'] = $login;  $_SESSION['password'] = $password;
        header("location:menutry2.php");
     }
     else{
         header("location:logintry1.php?error=2");
     } }
?>