<?php
include './Database.php';
include './Util.php';
$db=new Database;
$db=new Util;

// Handle Add New user ajax Request 
if(isset($_POST['add'])){
    print_r($_POST);
}