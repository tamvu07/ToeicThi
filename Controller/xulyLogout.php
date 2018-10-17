<?php
session_start();
if (isset($_GET['return']))
    $back = $_GET['return'];
session_destroy();
if(isset($_COOKIE['cookie_login'])) setcookie('cookie_login',0,time()-3600,"/");
$back=str_replace("/ToeicThi/View/","",$back);
header("Location: ../View/$back");
?>