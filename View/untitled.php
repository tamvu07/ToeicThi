<span id="text1"></span><p id="text"></p>

<script>
	localStorage.clear();
	document.getElementById("text1").innerHTML = localStorage.getItem("minutes-left");
	document.getElementById("text").innerHTML = localStorage.getItem("seconds-left");
</script>
