<?php
$con=new mysqli("localhost","root","","dbcc");
$s1="truncate table cctable";
$con->query($s1);
?>