<?php
require_once "../Model/model.php";
$toeic=new model();
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
 if(isset($_GET['username'])){ 
    	$username = $_GET['username'];
    	if($username == ""){
    		echo 1;
    		return;
    	}
        /*elseif(!preg_match("/^[ a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]+$/",$username)) 
    {
        echo 2;
        return;
    }*/
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