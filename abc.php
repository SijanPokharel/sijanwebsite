<?php
 $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username =="admin" && $password =="admin007")
    {
        header("location:home.php");
    }
    else
    {
    header("location:form.php");
    }
?>