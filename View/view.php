<?php

class View {
	public function show_index()
	{
		include("index.php");
	}
	public function show_footer()
	{
		include("foot.php");
	}
	public function show_header()
	{
		include("header.php");
	}
}

?>