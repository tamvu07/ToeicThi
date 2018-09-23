<?php
require_once "../Model/toeic.php";
$toeic=new toiec();
if(isset($_GET['email'])){
    $email=$_GET['email'];
    if($email=="") echo "<span>xin mời nhập email !!!</span>";
    elseif (!preg_match('/[@]{1}/',$email)){
     echo "<span>email gì mà thiếu @ vậy ???</span>";
    }
    
}
/**
 * Created by PhpStorm.
 * User: TheWindMaker
 * Date: 9/20/2018
 * Time: 11:27 PM
 */
 if(isset($_GET['username'])){ 
    	$username = $_GET['username'];
    	if($username == ""){
    		echo 1;
    		return;
    	}
        elseif(!preg_match("/^[ a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$/",$username)) 
    {
        echo 2;
        return;
    }
        else if($username != ""){
            $kq = $toeic->checkusername($username);
            if($kq != 0){
                echo 3;
                return;
            }else{
                echo 0;
                return;
            }
        }
    }
?>