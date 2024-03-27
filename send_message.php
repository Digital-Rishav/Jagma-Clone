<?php
require('connection.php');
require('function.php');

$name = get_safe_value($con, $_POST['name']);
$email = get_safe_value($con, $_POST['email']);
$sub = get_safe_value($con, $_POST['sub']);
$msg = get_safe_value($con, $_POST['msg']);

insert($con, 'message', ['name'=>$name, 'email'=>$email, 'subject'=>$sub, 'message'=>$msg]);
echo "valid";
?>