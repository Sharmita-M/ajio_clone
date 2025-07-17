<?php 
session_start();
include '../config.php';

if(empty($_POST['submit'])){
    $submit = $_REQUEST['submit'];
} else {
    $submit = $_POST['submit'];
}
?>