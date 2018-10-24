<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.border-timer {
    border: 2px solid red;
    border-radius: 5px;
	width:100px;
	padding: 10px;
	}
	
	.minute {
		text-decoration:line-through;
	}
</style>
</head>

<body>
    <div id="divCounter"></div>
    <script type="text/javascript">
    if(localStorage.getItem("counter")){
      if(localStorage.getItem("counter") >= 10){
        var value = 0;
      }else{
        var value = localStorage.getItem("counter");
      }
    }else{
      var value = 0;
    }
    document.getElementById('divCounter').innerHTML = value;

    var counter = function (){
      if(value >= 10){
        localStorage.setItem("counter", 0);
        value = 0;
      }else{
        value = parseInt(value)+1;
        localStorage.setItem("counter", value);
      }
      document.getElementById('divCounter').innerHTML = value;
    };

    var interval = setInterval(function (){counter();}, 1000);
  </script>
</body>
</html>