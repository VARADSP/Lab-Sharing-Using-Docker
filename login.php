<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab Sharing</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<script>
function validateForm() {
  var x = document.forms["login"]["name"].value;
  var y = document.forms["login"]["password"].value;
  if (x == "") {
    alert("Roll number must be filled out");
    return false;
  }
  if(y == ""){
    alert("Password must be filled out");
    return false;
  }
}
</script>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form name="login" method="POST" action="login1.php" id="signup-form" class="signup-form" onsubmit="return validateForm()">
                        <h2 class="form-title">Login</h2>
                        <div class="form-group">
                            <input type="number" class="form-input" name="name" id="name" placeholder="Your Roll Number"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
				
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Regiester Now !! <a href="register.php" class="loginhere-link">Register</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
