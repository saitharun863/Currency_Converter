<?php
$con=new mysqli("localhost","root","");
if($con->connect_error)
{
 echo "Failed";
}
else
{
 echo "connected";
}
$s1="create database dbcc";
if($con->query($s1)===TRUE)
{
 echo " DB created";
}
else
{
 echo "DB didnt created";
}
?>