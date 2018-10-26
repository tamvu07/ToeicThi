<?php
require_once "controller_main.php";
$toeic=new controller_main();
if(isset($_POST['comment'])) $bl=$_POST['comment'];
$bl=trim(strip_tags($bl));
echo $bl;

/**
 * Created by PhpStorm.
 * User: TheWindMaker
 * Date: 10/24/2018
 * Time: 3:17 PM
 */
?>