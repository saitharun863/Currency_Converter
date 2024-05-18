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
$q1="insert into cctable values('USD',1.0000,83.0391,0.9112,0.7839,143.75,1.489,322.43,0.8461,91.035,3.6728)";
	$con->query($q1);
$q2="insert into cctable values('INR',0.012,1,0.011,0.0094,1.7311,0.0179,3.8836,0.0102,1.0963,0.0442)";
	$con->query($q2);
$q3="insert into cctable values('EUR',1.0975,91.16,1,0.8604,157.76,1.6343,353.9181,0.9286,99.7687,4.0309)";
	$con->query($q3);
$q4="insert into cctable values('GBP',1.2758,105.9637,1.1625,1,183.403,1.8993,411.4405,1.0801,116.0324,4.0309)";
	$con->query($q4);
$q5="insert into cctable values('JPY',0.0069,0.5773,0.0063,0.00545,1,0.01035,2.2415,0.00588,0.63223,0.0256)";
	$con->query($q5);
$q6="insert into cctable values('AUD',0.6716,55.7701,0.6120,0.5263,96.6308,1,216.5871,0.56856,61.0934,2.46657)";
	$con->query($q6);
$q7="insert into cctable values('LKR',0.0031,0.2575,0.00282,0.00243,0.44615,0.004616,1,0.002625,0.28207,0.01138)";
	$con->query($q7);
$q8="insert into cctable values('CHF',1.18129,98.0993,1.07628,0.92573,169.97,1.7584,380.9380,1,107.4574,4.3382)";
	$con->query($q8);
$q9="insert into cctable values('RUB',0.01099,0.91298,0.01001,0.008614,1.58112,0.01636,3.5433,0.009305,1,0.04037)";
	$con->query($q9);
$q10="insert into cctable values('AED',0.27229,22.6120,0.24805,0.21333,39.1624,0.405157,87.80644,0.230475,24.7977,1)";
	$con->query($q10);
?>


