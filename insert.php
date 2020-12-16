<?php
  $NAME =$_GET['Name'];
  $AGE =$_GET['Age'];
  $EMAIL = $_GET['Email'];
  $CITY = $_GET['City'];


  $Con = mysqli_connect("localhost","root","","userdb");
  mysqli_query($Con, "INSERT INTO `tbluser`( `Name`, `Age`, `Email`, `City`) VALUES ('$NAME','$AGE','$EMAIL','$CITY')");
header("location:index.php")
?>



   