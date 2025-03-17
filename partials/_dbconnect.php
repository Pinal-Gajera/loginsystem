<?php
$server="localhost";
$username="root";
$password="";
$dbname="users";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("Error".mysqli_connect_error());
}
// else{
    
// }

?>