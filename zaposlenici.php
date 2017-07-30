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

    <title>Kolonia | Zaposlenici</title>

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
                    <li class="active"><a href="zaposlenici.php" id="color-me"><b>ZAPOSLENICI</b></a></li>
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
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <div class="circle-avatar" style="background-image:url(./img/mia.jpg)">
                    </div>
                    <!--<img src="./img/mia.jpg" class="img-circle img-thumbnail" alt="mia-slika">-->
                    <div class="caption">
                        <h3 class="text-center" id="uloga">Konobar</h3>
                        <h4 class="text-center" id="fbpost">Facebook profil i dio sadržaja:</h4>
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmia.vukobratovic%2Fposts%2F10207227190901389&width=300&show_text=true&height=398&appId" width="300" height="398" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <div class="circle-avatar" style="background-image:url(./img/doris.jpg)">
                    </div>
                    <!--<img src="./img/doris.jpg" class="img-circle img-thumbnail" alt="doris-slika">-->
                    <div class="caption">
                        <h3 class="text-center" id="uloga">Konobar</h3>
                        <h4 class="text-center" id="fbpost">Facebook profil i dio sadržaja:</h4>
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Frexys08%2Fposts%2F522218247874461&width=300&show_text=true&height=339&appId" width="300" height="339" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-md visible-sm"></div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <div class="circle-avatar" style="background-image:url(./img/sandra.jpg)">
                    </div>
                    <!--<img src="./img/sandra.jpg" class="img-circle img-thumbnail" alt="sandra-slika">-->
                    <div class="caption">
                        <h3 class="text-center" id="uloga">Pomoćni konobar / vlasnik</h3>
                        <h4 class="text-center" id="fbpost">Facebook profil i dio sadržaja:</h4>
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsandra.funtak%2Fposts%2F1336975683003455&width=300&show_text=true&height=175&appId" width="300" height="175" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <div class="circle-avatar" style="background-image:url(./img/drazen.jpg)">
                    </div>
                    <!--<img src="./img/drazen.jpg" class="img-circle img-thumbnail" alt="drazen-slika">-->
                    <div class="caption">
                        <h3 class="text-center" id="uloga">Vlasnik</h3>
                        <h4 class="text-center" id="fbpost">Facebook profil i dio sadržaja:</h4>
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fdrazen.funtak%2Fposts%2F676950252338423&width=350&show_text=true&height=362&appId" width="350" height="362" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
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