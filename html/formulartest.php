<?php

   if(empty($_POST['username']) //två streck    empty($_POST['password'])){
   
        header("Location:login.php");
   }
   
   $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
   $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
   echo $username;
   
   echo $password;
   
 ?>
   
