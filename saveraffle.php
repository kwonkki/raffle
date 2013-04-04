<?php
$link = mysql_connect('localhost', 'root', '1111');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("pspraffle");
$result = mysql_query("INSERT INTO tblraffle (batch, employee_name, gift) VALUES ('".$_POST['batch']."', '".$_POST['emp']."', '".$_POST['item']."');");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

mysql_close($link);

?>