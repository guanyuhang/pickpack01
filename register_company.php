<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
$sql=$pdo->prepare('insert into company value(null,?,?,?,?,?,?,?,?)');
$sql->execute([$_REQUEST['company_name'],$_REQUEST['account'],$_REQUEST['password'],$_REQUEST['number'],$_REQUEST['phone'],$_REQUEST['mail'],$_REQUEST['res_name'],$_REQUEST['identify_code']]);
	echo "新增成功";

?>