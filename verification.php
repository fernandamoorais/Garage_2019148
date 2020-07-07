<?php
session_start();
if(!isset($_SESSION['login_user'])){
	if(!isset($controlPag)){
		$urlRedirect = "";
	}else{
		$urlRedirect = "?url=".$controlPag;
	}
    header('Location: login.php'.$urlRedirect);
}
?>