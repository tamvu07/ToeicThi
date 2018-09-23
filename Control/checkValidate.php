<?php
require_once "../Model/toeic.php";
$toeic=new toiec();
if(isset($_GET['email'])){
    $email=$_GET['email'];
    if($email=="") echo "<strong>CHƯA NHẬP EMAIL !</strong>";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) echo "<strong>EMAIL KHÔNG PHÙ HỢP !</strong>";
}
/**
 * Created by PhpStorm.
 * User: TheWindMaker
 * Date: 9/20/2018
 * Time: 11:27 PM
 */