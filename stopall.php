<?php
session_start();


$server = "localhost";
$user = "root";
$pass = "redhat";
$db_name = "labsharing";
$conn = new Mysqli($server,$user,$pass,$db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "connected";

// Grab User submitted information


   if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
       {
           header("Location:index.php");  
       }

          echo $_SESSION['login_user'];
	$portno = $_SESSION['login_user'];
	$user_id = $portno;
	$container_name = 'CPP';
	$url = '172.16.9.1:'.$portno;






$sel = "select * from reqcontainers where user_id='$user_id'";

$ex = $conn->query($sel);

$rw = $ex->fetch_object();	

$container_id = $rw->container_id;

$cmd = 'sudo docker stop '.$container_id;

echo $cmd;
echo '<pre>';
    $content = system($cmd, $ret);
    echo '</pre>';

//$cmd1='sudo fuser -k '.$portno.'/tcp';
//echo '<pre>';
  //  $content = system($cmd1, $ret);
    //echo '</pre>';

$query1 = "DELETE FROM reqcontainers WHERE user_id='$user_id'";
mysqli_query($conn,$query1);

header("location:containertable.php");




?>

