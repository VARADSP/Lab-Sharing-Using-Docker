<?php
$server = "localhost";
$user = "root";
$pass = "redhat";
$db_name = "labsharing";
$conn = new Mysqli($server,$user,$pass,$db_name);


session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "connected";

// Grab User submitted information
$user_id = $_POST["name"];
$user_pass = $_POST["password"];





$sel = "select * from users where user_id='$user_id' and user_pass='$user_pass'";

$ex = $conn->query($sel);
$rw = $ex->fetch_object();

if($rw > 0){
echo "Login success!";

$_SESSION['login_user']=$user_id;


header("location: language.php");

}
else{
echo "<script>
alert('Make sure Rollno or Password is correct');
window.location.href='index.php';
</script>";
//alert("This user does not exist!!!");
//echo "<script>setTimeout(\"location.href='login.php';\",1500);</script>";


//echo "Please Log In First";
//echo "<script>setTimeout(\"location.href = 'http://www.forobd2.com';\",1500);</script>";
}

?>
