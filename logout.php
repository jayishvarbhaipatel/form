<?php

unset($_COOKIE['data']);
$jsondata=json_encode([]);
setcookie('data',$jsondata, time()+0,"/");
header("location:login.php");
?>