<?php
$member_id=$member_name=$account=$password=$identify=$identifycode='';
echo '<p>會員註冊</p>';
echo '<form action="register_member.php" method="post">';
echo '<table>';
echo '<tr><td>姓名</td><td>';
echo '<input type="text" name="member_name" value="',$member_name,'">';
echo '</td></tr>';
echo '<tr><td>帳號</td><td>';
echo '<input type="text" name="account" value="',$account,'">';
echo '</td></tr>';
echo '<tr><td>密碼</td><td>';
echo '<input type="text" name="password" value="',$password,'">';
echo '</td></tr>';
echo '<tr><td>身分驗證</td><td>';
echo '<p>一般會員<input type="radio" name="identify" value="一般會員"></p>';
echo '<p>公司員工<input type="radio" name="identify" value="公司員工"></p>';
echo '<tr><td>驗證碼</td><td>';
echo '<input type="text" name="identifycode" value="',$identifycode,'">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="註冊">';
echo '</form>';
?>


<?php
$company_name=$account=$password=$number=$phone=$mail=$res_name=$identify_code='';
echo '<p>廠商註冊</p>';
echo '<form action="register_company.php" method="post">';
echo '<table>';
echo '<tr><td>公司名稱</td><td>';
echo '<input type="text" name="company_name" value="',$company_name,'">';
echo '</td></tr>';
echo '<tr><td>公司帳號</td><td>';
echo '<input type="text" name="account" value="',$account,'">';
echo '</td></tr>';
echo '<tr><td>公司密碼</td><td>';
echo '<input type="text" name="password" value="',$password,'">';
echo '</td></tr>';
echo '<tr><td>統編</td><td>';
echo '<input type="text" name="number" value="',$number,'">';
echo '</td></tr>';
echo '<tr><td>電話</td><td>';
echo '<input type="text" name="phone" value="',$phone,'">';
echo '</td></tr>';
echo '<tr><td>e-mail</td><td>';
echo '<input type="text" name="mail" value="',$mail,'">';
echo '</td></tr>';
echo '<tr><td>負責人暱稱</td><td>';
echo '<input type="text" name="res_name" value="',$res_name,'">';
echo '</td></tr>';
echo '<tr><td>公司驗證碼</td><td>';
$identify_code =  randnum();
echo $identify_code;
echo '<input type="hidden" name="identify_code" value="',$identify_code,'">';
function randnum()
{
    $code_len = 5;
    $num = '';

    $word = '123456789';
    $len = strlen($word);

    for ($i = 0; $i < $code_len; $i++) {
        $num .= $word[rand() % $len];
    }

    return $num;
}

echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="註冊">';
echo '</form>';



?>

