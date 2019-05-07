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
           header("Location:login.php");  
       }

          //echo $_SESSION['login_user'];
	$portno = $_SESSION['login_user'];
	$user_id = $portno;
	$container_name = 'PYTHON';
	//$url = '172.16.10.40:'.$portno;
//$url = '172.16.9.61:'.$portno;
$url = '172.16.9.28:'.$portno;
$sel = "select * from reqcontainers where user_id='$user_id'";

$ex = $conn->query($sel);

$rw = $ex->fetch_object();	

if($rw>0)
{

echo "<script>
alert('Please stop already running containers!');
window.location.href='containertable.php';
</script>";
}	
else{



$command = 'sudo docker run -itd -p ' .$portno.':80 -v /root/containers/'.$portno.'/python:/root:Z python-gui';
echo $command;

echo '<pre>';
    $content = system($command, $ret);
    echo '</pre>';

if($content!=NULL){
$query = "INSERT INTO `reqcontainers`(`user_id`,`container_type`,`container_name`,`url`,`container_id`) VALUES('$user_id','$container_name','$portno','$url','$content')";
 $result = mysqli_query($conn,$query);

}

header("location: loading.php");

        if($result){
            echo "container created";
	

//function CImgFun() {
  //
//}

//echo "hello"



}

//$output = shell_exec('RET=`sudo docker images`;echo $RET');
//echo $output;


//echo '<pre>';
  //  $content = system('sudo python /root/pyt.py', $ret);
   //echo '</pre>';

//echo '<pre>';
  //  $content = system('sudo firefox http://localhost:33333', $ret);
    //echo '</pre>';
//header("location: http://localhost:33333");





// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
//$last_line = system('docker images', $retval);

// Printing additional info
//echo '
//</pre>
//<hr />Last line of the output: ' . $last_line . '
//<hr />Return value: ' . $retval;


//echo "Running python";
//$command = escapeshellcmd('/var/www/html/oursite/scripts/test1.py');
//$output = shell_exec($command);
//echo $output;

//
//$message = exec("/var/www/html/oursite/scripts/test1.py 2>&1");
//print_r($message);

//header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>

