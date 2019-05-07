<?php
session_start();

$server = "localhost";
$user = "root";
$pass = "redhat";
$db_name = "labsharing";
$conn = new Mysqli($server,$user,$pass,$db_name);

$portno = $_SESSION['login_user'];
	$user_id = $portno;


$sel = "select * from reqcontainers where user_id='$user_id'";

$ex = $conn->query($sel);

$rw = $ex->fetch_object();	

$container_id = $rw->container_id;

$cmd = 'sudo docker stop '.$container_id;

echo $cmd;
echo '<pre>';
    $content = system($cmd, $ret);
    echo '</pre>';
 
$query1 = "DELETE FROM reqcontainers WHERE user_id='$user_id'";
mysqli_query($conn,$query1);



session_destroy();
header("Location:login.php");


//echo 'You have been logged out. <a href="/">Go back</a>';
?>
