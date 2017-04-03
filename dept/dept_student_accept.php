<?php
include('dept_session.php');
include_once("../dbconnect.php");
$outname1=$_SESSION['login_user'];

$abc1="SELECT electiveid FROM dept_login WHERE deptid='$outname1'";
  $result1 = mysqli_query($connection, $abc1);
  $rowa1 = mysqli_fetch_array($result1);
  $out1=$rowa1['electiveid'];
$rollno=$_REQUEST['rollno'];
$abc="Update $out1 set selects=1 WHERE rollno=$rollno ";
echo $abc;

if(mysqli_query($connection, $abc))
{
	echo "updated";
}
else
{
	echo "error";
}
header('Location:dept_profile.php?check=1');
?>