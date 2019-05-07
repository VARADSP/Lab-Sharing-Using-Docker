<html>
<head>
<style>
.loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999999;
            background-color: #000000;
        }
        .loader img{
	    display:block;
	    position:center;
            margin:0 auto;
        }
</style>
</head>
<body>
<br/><br/>
<div class="loader" ><img src="img/load3.gif" alt="image"></div>

</body>
</html>

<?php
session_start();



 //  if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
   //    {
     //      header("Location:login.php");  
       //}

          //echo $_SESSION['login_user'];
	$portno = $_SESSION['login_user'];
	$user_id = $portno;
	$container_name = 'CPP';
	$url = '172.16.9.28:'.$portno;
   //$url = '172.16.9.61:'.$portno;

while(1)
{
$command = 'sudo docker ps | grep "46133\|46110\|46136" | grep "health: starting\|unhealthy"';

echo '<pre>';
    $content = system($command, $ret);
    echo '</pre>';

if($content!=""){

//<html>
//<body>

//<img src="img/giphy.gif" style="align:center;height:700px;width:1380px">

//</body>
//</html>

echo "<script>
 window.onload = function() 
    {
        //display loader on page load 
        //$('#overlay').addClass('hide');        
	$('.loader').fadeOut();
    }

</script>";

}
else{

 echo "<script> location.href='http://$url'; </script>";
        exit;
break;

}


}

//echo "<script type=\"text/javascript\">
  //      window.open($url, '_blank')
   // </script>";

 
?>

<?php //This is lodaing page 
      // Linked with : javacontainer.php rstudio.php scliab.php
?>

