<?php
$servername="localhost";
$username="root";
$password="";
$database_name="db";
 
$conn = mysqli_connect($servername,$username,$password,$database_name);
if($conn)
{
    // echo "yes";
}
else{
    echo "fail";
}


?> 
