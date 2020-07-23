<?php
session_start();
if(isset($_SESSION['people'])){
	unset($_SESSION['people']);
	echo '登出成功';
}else{
	echo '已經是登出狀態';
}

?>