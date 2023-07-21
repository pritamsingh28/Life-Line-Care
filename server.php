
<?php
$host="localhost";
$username="root";
$password="";
$database="travel";
$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
  echo "Database Not Connected";
}


?>
