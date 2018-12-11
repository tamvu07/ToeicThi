<?php
if(isset($_POST['send'])){
    $check=true;
    $name=$_POST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if ($email == NULL) {
        $check=false;
        echo '<script>alert("Bạn chưa nhập email")</script>';
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        $check=false;
        echo '<script>alert("Bạn nhập email chưa đúng")</script>';
    }
    if ($name == NULL) {
        $check=false;
        echo '<script>alert("Bạn chưa nhập tên")</script>';
    }
    if ($message == NULL) {
        $check=false;
        echo '<script>alert("Bạn chưa nhập nội dung")</script>';
    }
    if($check){
        $toeic->GuiMail("phamducthanh159@gmail.com", "phamducthanh1230@gmail.com", "ADMIN", "DEUS CONTACT", "Người gửi: ".$email."<br>Nội dung: ".$message, "phamducthanh1230@gmail.com", "phamducthanh1230", $error);
        if ($error != "") {
            die('<script>alert('.$error.')</script>');
        }
        else{
            echo '<script>alert("Đã gửi mail")</script>';
        }
    }


}

?>


<style>
	    body{
	    	background-image: url(img/layout/background.jpg);
			position:relative;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
		p {
			color:white;
		}
		label
		{
			font-size: 15px;
			color: white;
		}
		h1 {
			color: white;
			text-align: center;
		}
   </style>

	


<div class="container contact-form">
	<h1>Liên hệ với chúng tôi</h1>
	<hr>

	<div class="row">
   
       <div class="col-md-6">
       	<p>Hãy liên hệ với chúng tôi để phản ánh về những khó khăn mà bạn đang gặp phải trong quá trình sử dụng dịch vụ. Mọi góp ý của bạn sẽ được tiếp nhận để đem đến những trải nghiệm tốt nhất cho người dùng.</p>
       	<p>Hãy vui lòng sử dụng biểu mẫu bên cạnh để nhập thông tin và thông điệp gửi đến cho chúng tôi.</p>
       	<p>Bạn cũng có thể liên hệ qua trực tiếp thông qua địa chỉ Email, số điện thoại hoặc địa chỉ được nêu ở dưới.</p>
       	<center>
       	<div class="card" style="width: 18rem; color:blue;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><i class="ui ui-email"></i> <b>Email: test@gmail.com</b></li>
    <li class="list-group-item"><i class="ui ui-whatsapp"></i> <b>Số điện thoại: 34563463434</b></li>
	<li class="list-group-item"><i class="ui ui-github"></i> <b>Địa chỉ: IUH</b></li>
  </ul>
</div></center>
       </div>

       <div class="col-md-6">
       <form method="post" action="">
         <div class="form-group">
         	 <label><i class="ui ui-star"></i> Họ Tên</label>
         	<input type="text" class="form-control" name="name" placeholder="Your Name..">
         </div>

         <div class="form-group">
         	<label><i class="ui ui-whatsapp"></i> Email</label>
         	<input type="text" class="form-control" name="email" placeholder="Your Email..">
         </div>

         <div class="form-group">
         	<label><i class="ui ui-email"></i> Tin nhắn</label>
         	<textarea  class="form-control" rows="7" name="message" placeholder="Message.."></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block" name="send">Gửi tin nhắn</button>
         </div>
         </form>
       </div>

    </div>

</div><br><br>

