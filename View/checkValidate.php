<?php
require_once "../Model/toeic.php";
$toeic=new toiec();
if(isset($_GET['email'])){
    $email=$_GET['email'];
    if($email=="") echo "<span>xin mời nhập email !!!</span>";
    elseif (!preg_match('/[@]{1}/',$email)) echo "<span>email gì mà thiếu @ vậy ???</span>";
}
/**
 * Created by PhpStorm.
 * User: TheWindMaker
 * Date: 9/20/2018
 * Time: 11:27 PM
 */