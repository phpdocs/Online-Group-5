<?php
if(isset($_GET['btnsend'])){
    $name=$_GET['txtName'];
    echo "<h1>Welcome to PHPDocs Mr.".$name."</h1>";
}