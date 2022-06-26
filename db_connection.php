
<?php
 	
     $server="localhost";
     $name="root";
     $password="";
     $db="clinic";
 
     $conn=mysqli_connect($server,$name,$password,$db);
 if(! $conn){
     echo "<script> alert ('not connected')</script>";
 }
 
 ?> 
 
 