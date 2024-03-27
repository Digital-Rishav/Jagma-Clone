<?php
require('connection.php');
require('function.php');

$name = get_safe_value($con, $_POST['name']);
$email = get_safe_value($con, $_POST['email']);
$aemail = get_safe_value($con, $_POST['aemail']);
$phone = get_safe_value($con, $_POST['phone']);
$aphone = get_safe_value($con, $_POST['aphone']);

insert($con, 'quote_first', ['name'=>$name, 'email'=>$email, 'aemail'=>$aemail, 'phone'=>$phone, 'aphone'=>$aphone]);
echo "valid";
?>