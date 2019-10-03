<?php
	session_start();
	include("config.php");
	include("model/model.php");
	$controller=isset($_GET["controller"])?$_GET["controller"]:"";
	function checkController($controller) {
		if($controller == "login" && isset($_SESSION["username"])==false) {
			include("controller/frontend/controller_login.php");
			return;
		}
		if($controller == "register" && isset($_SESSION["username"])==false) {
			include("controller/frontend/controller_register.php");
			return;
		}
		if($controller == "logout" && isset($_SESSION["username"])==false) {
			include("controller/frontend/controller_logout.php");
			return;
		}
		if($controller != "")
			$controller="controller/frontend/controller_$controller.php";
		else
			$controller ="controller/frontend/controller_home.php";
		if(file_exists($controller))
			include("view/frontend/page.php");
		else
			include("view/frontend/home.php");
	}
	checkController($controller);
 ?>
