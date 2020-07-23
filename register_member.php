<?php
session_start();
if($_POST['identify']=='一般會員'){
$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
$sql=$pdo->prepare('insert into member value(null,?,?,?,?)');
$sql->execute([$_REQUEST['member_name'],$_REQUEST['account'],$_REQUEST['password'],$_REQUEST['identify']]);
	echo "新增成功";
}
if($_POST['identify']=='公司員工'){
	$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
	$sql=$pdo->prepare('select * from company where identify_code=?');
	$sql->execute([$_REQUEST['identifycode']]);
	foreach($sql->fetchAll() as $row){
		
			$_SESSION['identify']=['company_id'=>$row['company_id'],'company_name'=>$row['company_name'],
				'account'=>$row['account'],'password'=>$row['password']];

	}
	if(isset($_SESSION['identify'])){
	$sql=$pdo->prepare('insert into member value(null,?,?,?,?)');
	$sql->execute([$_REQUEST['member_name'],$_REQUEST['account'],$_REQUEST['password'],$_REQUEST['identify']]);
		echo $_SESSION['identify']['company_name'],"的員工註冊成功";

	}
	else{
		echo "註冊/輸入錯誤";
	}
	unset($_SESSION['identify']);
}
?>