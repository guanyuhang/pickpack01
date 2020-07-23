<?php
session_start();
unset($_SESSION['people']);
if($_POST['radio']=='member'){
	$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
	$sql=$pdo->prepare('select * from member where account=? and password=?');
	$sql->execute([$_REQUEST['account'],$_REQUEST['password']]);
	foreach($sql->fetchAll() as $row){
		
			$_SESSION['people']=['member_id'=>$row['member_id'],'member_name'=>$row['member_name'],
				'account'=>$row['account'],'password'=>$row['password'],'identify'=>$row['identify']];

	}
	if(isset($_SESSION['people'])){
		echo "親愛的",$_SESSION['people']['member_name'],"歡迎進入";
	}
	else{
		echo "輸入錯誤";
	}
}
if($_POST['radio']=='company'){
	$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
	$sql=$pdo->prepare('select * from company where account=? and password=?');
	$sql->execute([$_REQUEST['account'],$_REQUEST['password']]);
	foreach($sql->fetchAll() as $row){
		
			$_SESSION['people']=['company_id'=>$row['company_id'],'company_name'=>$row['company_name'],'res_name'=>$row['res_name'],
				'phone'=>$row['phone'],'mail'=>$row['mail'],'identify_code'=>$row['identify_code'],
				'account'=>$row['account'],'password'=>$row['password'],'number'=>$row['number']];

	}
	if(isset($_SESSION['people'])){
		echo $_SESSION['people']['company_name'],"廠商歡迎進入";
	}
	else{
		echo "輸入錯誤";
	}
}

?>

