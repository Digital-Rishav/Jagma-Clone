<?php
require('connection.php');
require('function.php');

$org = get_safe_value($con, $_POST['org']);
$url = get_safe_value($con, $_POST['url']);
$head = get_safe_value($con, $_POST['head']);

insert($con, 'quote_second', ['org'=>$org, 'url'=>$url, 'head'=>$head]);
echo "valid";
?>