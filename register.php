<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Službena stranica za caffe bar Kolonia">
    <meta name="keywords" content="caffe bar, kafić, kolonia, službena stranica, piće, belišće">
    <meta name="author" content="Matija Tivanovac">

    <title>Kolonia | Welcome</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
     <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="./script/script.js"></script>
</head>

<body>

    <script>
        function checkAvailability() {
        jQuery.ajax({
        url: "includes/check_availability.php",
        data:'uid='+$("#uid").val(),
        type: "POST",
        success:function(data){
        $("#user-availability-status").html(data);
        },
        error:function (){}
        });
        }
    </script>

    <script>
        function checkPasswordMatch() {
        var password = $("#pwd").val();
        var confirmPassword = $("#confirm_password").val();

        if (password != confirmPassword)
            $("#message").html("Passwords do not match!").css('color', '#D60202');
        else
            $("#message").html("Passwords match.").css('color', '#2FC332');
        }
        $(document).ready(function () {
            $("#pwd, #confirm_password").keyup(checkPasswordMatch);
        });
    </script>

    <script>
        function validateEmail(email) 
			 {
    			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    			return re.test(email);
				}
			function validate()
			{
				$("#result").text("");
				var email = $("#email").val();
				if (validateEmail(email)) 
				{
					$("#result").text("  ->ispravan e-mail");
					$("#result").css("color", "#2FC332");
				} 
				else
				 {
					$("#result").text("  ->neispravan e-mail");
					$("#result").css("color", "#D60202");
				}
				return false;
			}
    </script>


        <div class="branding">
            <div class="page-header">
                <div class="container">
                <a href="index.php"><img src="./img/kolonia-red-smaller.png" class="img-rounded img-responsive center-block" id="koloniaLogo" alt="Kolonia naslovni logo"></a>
                <p id="slogan" class="text-center">Službena stranica poznatog belišćanskog caffe bara</p>
                </div>
            </div>
        </div>

 <nav class="navbar navbar-inverse" id="regnav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav list-hover-slide">
                    <li><a href="index.php" id="color-me"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li><a href="zaposlenici.php" id="color-me"><b>ZAPOSLENICI</b></a></li>
                    <li><a href="cjenik.php" id="color-me"><b>CJENIK</b></a></li>
                    <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<li><a href="kontakt.php" id="color-me"><b>KONTAKT</b></a></li>';
                        } else {
                            echo '<li class="disabled"><a href="#""><b>KONTAKT</b></a></li>';
                        }
                    ?>
                </ul>
                <ul class="nav navbar-nav navbar-right list-hover-slide">
                    
                    <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<li><a href="includes/logout.php" id="nocollapse"><span class="glyphicon glyphicon-log-out"></span> <span class="hidden-sm"><b>Logout</b></span></a></li>';
                        } else {
                            echo '<li><a href="#myNavbar-collapse" data-toggle="collapse" id="nocollapse"><span class="glyphicon glyphicon-log-in"></span> <span class="hidden-sm"><b>Login</b></span></a></li>
                                <li class="activelink"><a href="register.php" id="color-me"><span class="glyphicon glyphicon-user"></span> <span class="hidden-sm"><b>Sign Up</b></span></a></li>';
                        }

                    ?>
                    
                </ul>
                <div class="collapse nav navbar-nav nav-collapse slide-down" id="myNavbar-collapse">
                    <form class="navbar-form navbar-left form-inline" role="form" action="includes/login.php" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="Username">Username</label>
                            <input type="text" name="uid" class="form-control" id="username" placeholder="Username/e-mail" autofocus required />
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="Password">Password</label>
                            <input type="password" name="pwd" class="form-control" id="Password" placeholder="Password" required />
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">GO</button>
                    </form>
                </div>
    </div>
  </div>
</nav>

<div class="container"><p></p></div>

<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h2 class="title">Registrirajte se</h2>
	               		<hr id="podcrtajreg" />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="includes/signup.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your First name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="first" id="first"  placeholder="Enter your First name"/>
								</div>
							</div>
						</div>

                        <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Last name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="last" id="last"  placeholder="Enter your Last name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email<span id="result"></span></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your E-mail" onkeyup="validate()"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username<span id="user-availability-status"></span></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-globe" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="uid" id="uid"  placeholder="Enter your Username" onkeyup="checkAvailability()"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="pwd" id="pwd"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group" id="potvrda">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm_password" id="confirm_password"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>
                        <div id="potvrda2">
                            <label for="confirm" class="cols-sm-2 control-label"><span id='message'></span></label>
                        </div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
        <br>
        <br>
        <br>
        <br>
        <br>

    <footer>
        <p id="ft-text">Kolonia, Copyright &copy; 2017</p>
    </footer>

    
</body>
</html>