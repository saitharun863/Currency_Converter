<?php
$con=new mysqli("localhost","root","","dbcc");
if($con->connect_error)
{
 echo "Failed";
}
else
{
 echo "connected";
}
$s1="create table CCTable(currency varchar(5),USD float,INR float,EUR float,GBP float,JPY float,AUD float,LKR float,CHF float,RUB float,AED float)";
if($con->query($s1)===TRUE)
{
 echo " inserted";
}
else
{
 echo "not inserted";
}
?>
