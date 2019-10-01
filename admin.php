<?php 
	session_start();
	include "config.php";
	include "model/model.php";
	if(isset($_SESSION["username"])==false)
		include("controller/backend/controller_login.php");
	else{
		$controller=isset($_GET["controller"])?$_GET["controller"]:"";
		$controller="controller/backend/controller_$controller.php";
		include("view/backend/home.php");
	}
 ?>