<?php
$insert = false;
if(isset($_POST['uname'])){
$server="localhost";
$username="root";
$password="";



$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed".
    mysqli_connect_error());
}

$uname=$_POST['uname'];
$email=$_POST['email'];
$feed=$_POST['feed'];


$sql="INSERT INTO jaguardb.feedback(`uname`, `email`, `feed`) VALUES ('$uname', '$email', '$feed');";
//echo $sql;
if($con->query($sql)==true){
  //echo "successfully inserted";
}
else{
    //echo "ERROR: $sql<br> $con->error";
}

header('Location:index.html');
die();

$con->close();
}
?>







