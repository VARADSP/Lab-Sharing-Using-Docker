<?php   session_start();  ?>

<?php
      if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
       {
           header("Location:index.php");  
       }

          echo $_SESSION['login_user'];


          echo "Login Success";

//function CImgFun() {
  //header("location: http://localhost:32768");
//}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab Sharing</title>
	<meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
	<meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- food icons -->
	<link rel="stylesheet" type="text/css" href="css/organicfoodicons.css" />
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
   <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
<script>
function cppcontainer() {
}

function javacontainer(){
}
function ccontainer(){
}

function pythoncontainer(){
}

</script>



</head>

<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
				<div class="dummy-icon foodicon foodicon--coconut"></div>
				<h2 class="dummy-heading">Language Containers</h2>
			</div>

                      
                      <div class="bp-header__main">
			         <br><br><br><br><br>
                        </div>
		</header>
		<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
                        <a href="language.php" class="button" style="padding:15px 20px 20px 20px">Language Containers</a>	<br><br><br>
			<a href="database.php" class="button" style="padding:15px 20px 20px 20px">Database Containers</a>	<br><br><br>
			<a href="multiple.php" class="button" style="padding:15px 20px 20px 20px">IDE Containers</a>	<br><br><br>
			<a href="containertable.php" class="button" style="padding:15px 20px 20px 20px">Requested Containers</a>	<br><br><br>
                        <a href='logout.php' class="button" style="padding:15px 20px 20px 20px">Log Out</a> <br><br><br>
		</nav>
		<div class="content">



<a href="cppcontainer.php" target="_blank" style="margin:50px">
<img border="0" alt="W3Schools" src="img/cpp.png" onclick="javascript:cppcontainer()" width="100" height="100">
</a>
<a href="ccontainer.php" target="_blank" style="margin:50px">
<img border="0" src="img/cprogramming.png" onclick="javascript:cppcontainer()" width="100" height="100">
</a>
<a href="javacontainer.php" target="_blank" style="margin:50px">
<img border="0" alt="W3Schools" src="img/java.png" onclick="javascript:javacontainer()" width="100" height="100">
</a>
<a href="pythoncontainer.php" target="_blank" style="margin:50px">
<img border="0" alt="W3Schools" src="img/python.png" onclick="javascript:pythoncontainer()" width="100" height="100">
</a>
			<p class="info">Language Containers</p>
			<!-- Ajax loaded content here -->
		</div>
	</div>
	<!-- /view -->
	<script src="js/classie.js"></script>
	<script src="js/dummydata.js"></script>
	<script src="js/main1.js"></script>
	<script>
	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
			closeMenuCtrl.focus();
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
			openMenuCtrl.focus();
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				classie.remove(gridWrapper, 'content--loading');
				gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
			}, 700);
		}
	})();
	</script>
</body>

</html>
