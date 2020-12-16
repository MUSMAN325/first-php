<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <!-- Trigger the modal with a button -->
 <div class="container">
 <div class="row justify-content-center"> 
 <button type="button" class="btn btn-info btn-lg  " data-toggle="modal"
 data-target="#myModal">INSERT</button>

                    <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

                            <!-- Modal content-->
<div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">&times;</button>

 </div>
 <div class="modal-body">
 <div class="container">
 <div class="row justify-content-center">                               
 <form action="insert.php" >
<label for="">Name:</label>
<input type="text" name ="Name" >
<label for="">Age:</label>
<input type="text" name ="Age" >
<label for="">Email:</label>
<input type="text" name ="Email" >
<label for="">City</label>
<input type="text" name ="City" >
<button type = "submit" class = "btn btn-danger btn-block mt-3">Submit</button>
<button type="button" class="btn btn-info btn-block" data-dismiss="modal">Close</button>
</form>
 </div>
 <!-- <div class="modal-footer">
 
 </div> -->
</div>
 </div>
</div>
</div>
</div>
 </div>
 </div>
 </div>




<?php
$Con = mysqli_connect("localhost","root","","userdb");
$RawData = mysqli_query($Con, "select * from tbluser");
?>
<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-4 col-lg-10">
<table class = "table table-bordered" style = "margin-left: 10px">
    <thead class="thead-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th colspan="5">City</th>
        
        
    </thead>
    <tbody>
   <?php
   $i = 0;
   while($row = mysqli_fetch_array($RawData)){
   ?>
   <tr>
       <td><?php echo ++$i ?></td>
       <td><?php echo $row['Name'] ?></td>
       <td><?php echo $row['Age'] ?></td>
       <td><?php echo $row['Email'] ?></td>
       <td><?php echo $row['City'] ?></td>
     
       <td><a href="delete.php? Id= <?php echo $row['Id'] ?>"class = "btn btn-outline-danger">Delete</a></td>
       <td><a href="update.php? Id= <?php echo $row['Id'] ?>"  class = "btn btn-outline-success">Update</a></td>
       
    </tr>
   <?php
   }
   ?>
       </tbody>
</table>
</div>
</div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>