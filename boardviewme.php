
<?php 
$pdo=new PDO('mysql:host = localhost;dbname=pickpack;charset = utf8','root','1234');
foreach ($pdo->query('select * from rate') as $row){
	echo '<p>';
	echo $row['article_id'],':';
	echo $row['member_id'],':';
	echo $row['rate_content'],':';
	echo $row['rate'];
	echo '</p>';
}
?>
