<?php
	session_start();
	include("config.php");
	include("model/model.php");
	$controller=isset($_GET["controller"])?$_GET["controller"]:"";
	if($controller != "")
		$controller="controller/frontend/controller_$controller.php";
	else
		$controller ="controller/frontend/controller_home.php";
	if(file_exists($controller))
		include("view/frontend/page.php");
	else
		include("view/frontend/home.php");

 ?>
