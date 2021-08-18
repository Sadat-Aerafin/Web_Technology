<?php 
	require_once "model/empModel.php";	
	$username=$_GET["un"];
	$res = trim(checkUsernameValidity($username));
	echo $res;
?> 