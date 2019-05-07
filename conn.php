<?php
$server = "localhost";
$user = "root";
$pass = "redhat";
$db_name = "labsharing";
$conn = new Mysqli($server,$user,$pass,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$fullname = $_POST['name'];

	$password =  $_POST['password'];

$sel = "select * from users where user_id='$fullname'";

$ex = $conn->query($sel);
$rw = $ex->fetch_object();

if($rw > 0){
echo "<script>
alert('User Already Registered');
window.location.href='index.php';
</script>";
}
else{
//our sql statement that we will execute
       
	$query = "INSERT INTO `users`(`user_id`,`user_pass`) VALUES ('$fullname','$password')";
	
        $result = mysqli_query($conn,$query);
        if($result){
            echo "You are registered successfully";
            header("location: login.php");
        }
}

//        else{
//
  //          $sql="select * from users where (user_id='$fullname');";
    //        $res=mysqli_query($conn,$sql);
      //      if (mysqli_num_rows($res) > 0) {
            // output data of each row
 //           $row = mysqli_fetch_assoc($res);
   //         if ($fullname==$row['user_id'])
     //       {
       //         echo "Username already exists";
         //   }
        //}        


//else{
  //       echo "Execute" . $result;
    //     }

/*
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysqli_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
echo "Connected";


function NewUser()
{
	$fullname = $_POST['name'];

	$password =  $_POST['password'];
	$query = "INSERT INTO users (user_id,user_pass) VALUES ('$fullname','$password')";
	$data = mysqli_query ($query)or die(mysqli_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['name']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysqli_query("SELECT * FROM users WHERE user_id = '$_POST[name]' AND user_pass = '$_POST[password]'") or die(mysqli_error());

	if(!$row = mysqli_fetch_array($query) or die(mysqli_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	NewUser();
}*/


?>



