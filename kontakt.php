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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="./script/script.js"></script>
</head>

<body>

    <div>
        <?php
            if (isset($_SESSION['u_id'])) {
                echo "Korisnik ","<b>", $_SESSION['u_uid'], "</b>", " je logiran";
            } 
        ?>

    </div>
    
        <div class="branding">
            <div class="page-header">
                <div class="container">
                <a href="index.php"><img src="./img/kolonia-red-smaller.png" class="img-rounded img-responsive center-block" id="koloniaLogo" alt="Kolonia naslovni logo"></a>
                <p id="slogan" class="text-center">Službena stranica poznatog belišćanskog caffe bara</p>
                </div>
            </div>
        </div>

 <nav class="navbar navbar-inverse">
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
                            echo '<li class="active"><a href="kontakt.php" id="color-me"><b>KONTAKT</b></a></li>';
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
                                <li><a href="register.php" id="nocollapse"><span class="glyphicon glyphicon-user"></span> <span class="hidden-sm"><b>Sign Up</b></span></a></li>';
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

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="well well-sm" id="bunar-kontakt-tel">
            <h3 id="kontakt-istakni">TELEFON:</h3>
            <ul id="lista-uredi">
            <li>Vlasnik: 031/662-155</li>
            <li>Caffe bar: 031/662-526</li>
            <li>Mobitel-1: 098 1397 402</li>
            <li>Mobitel-2: 098 1397 588</li>
            </ul>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="well well-sm" id="bunar-kontakt-mail">
            <h3 id="kontakt-istakni">E-MAIL:</h3>
            <ul id="lista-uredi">
            <li>Službeni: <a href="mailto:kolonia@gmail.com">kolonia@gmail.com</a></li>
            <li>Dražen Funtak: <a href="mailto:drfuntak@gmail.com">drfuntak@gmail.com</a></li>
            <li>Sandra Funtak: <a href="mailto:sandra.funtak@gmail.com">sandra.funtak@gmail.com</a></li>
            </ul>
        </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="clearfix visible-md visible-lg"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="well well-sm" id="bunar-kontakt-loc">
                        <h3 id="kontakt-istakni">LOKACIJA:</h3>
                        <ul id="lista-uredi">
                        <li>Caffe bar "Kolonia"</li>
                        <li>Ulica kralja Tomislava 167</li>
                        <li>HR-Belišće, 31551</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="iframe-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1187.078202031884!2d18.401597490328154!3d45.683867635283384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475d2310bb2817ed%3A0xf4b93535e5a0c291!2sUl.+kralja+Tomislava+167%2C+31551%2C+Beli%C5%A1%C4%87e!5e0!3m2!1shr!2shr!4v1498733609667" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <footer>
        <p id="ft-text">Kolonia, Copyright &copy; 2017</p>
    </footer>

</body>
</html>