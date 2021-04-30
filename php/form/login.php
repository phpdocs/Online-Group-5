<?php

if(isset($_POST['btnlogin'])){
    $UserName=$_POST['txtUserName'];
    $Password=$_POST['txtPassword'];

    echo "<h1>UserName=$UserName</h1>";
    echo "<h1>Password=$Password</h1>";
}