<?php
include 'config.php';
$Id =$_GET['Id'];
$Name =$_GET['Name'];
$Age =$_GET['Age'];
$Email =$_GET['Email'];
$City =$_GET['City'];
mysqli_query($Con,"UPDATE `tbluser` SET Name='$Name', Age =$Age, Email='$Email', City='$City' WHERE Id = $Id");
header("location:index.php");

?>