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
     <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="./script/script.js"></script>
</head>

<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hr_HR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
                    <li class="active"><a href="index.php" id="color-me"><span class="glyphicon glyphicon-home"></span></a></li>
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2 id="opis-naslov">Ukratko...</h2>
                <p id="opis">Kolonia je izgrađena na temeljima jednog od najstarijih kafića, tj. caffe barova u Belišću.
                   Zgrada je ostala ista, ali je obnovljena i opremljena bolje od svog prethodnika. Smještena je 
                   u blizini novoizgrađenog kružnog toka što podrazumijeva novu cestu i nova parkirna mjesta sa 
                   lakšim pristupom, skoro u centru grada. Zbog svoje tradicije i povezanosti ima monogo vjernih
                   mušterija koje se ponovno vraćaju u svoj omiljeni prostor za opuštanje, osvježenje i zabavljanje.
                </p>
                <div class="well well-sm" id="bunar-pocetna">
                    <dl>
                        <dt>Zabavni sadržaji:</dt>
                        <dd> -Razni automati na sreću, pikado, kladionice, hrana uz piće na događajima...</dd>
                        <dt>Događaji i glazba:</dt>
                        <dd> -Svakog petka ili live glazba sa lokalnim i stranim bandovima ili karaoke</dd>
                        <dt>Prostor:</dt>
                        <dd> -Veliki unutarnji prostor sa glavnim i odvojenim dijelom, te velika vanjska terasa</dd>
                        <dt>Sponzori i plaćanje:</dt>
                        <dd> -Kafić sponzorira Osječko pivo, plaćanje isključivo gotovinom</dd>
                    </dl>
                </div>
            </div>
            <div class="col-lg-1 hidden-md hidden-sm"></div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <h3 class="text-center" id="fbpage-txt1"><u>Pratite nas na Facebook-u</u></h3>
                <center>
                    <div class="fb-page" data-href="https://www.facebook.com/caffebarkolonia/" data-tabs="timeline,events,messages" data-width="450" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/caffebarkolonia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/caffebarkolonia/">Caffe bar &quot;Kolonia&quot;, Belišće</a></blockquote></div>
                </center>
                <h3 class="text-center" id="fbpage-txt2"><u>Podijelite stranicu sa drugima:</u></h3>
                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2FCaffe-bar-Kolonia-Beli%25C5%25A1%25C4%2587e-167248214257%2F&layout=button_count&size=large&mobile_iframe=true&width=99&height=28&appId" class="center-block" id="fb-btn" width="150" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>

    <div id="theCarousel" class="carousel slide center-block" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#theCarousel" data-slide-to="1"></li>
            <li data-target="#theCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="./img/car1.jpg" alt="carousel1">
                     <div class="carousel-caption">
                         <h1 id="car-naslov">Unutarnji prostor i vanjska terasa</h1>
                         <p id="car-txt">TV sadržaj, klađenje, pikado...</p>
                    </div>
            </div>
            <div class="item">
                <img src="./img/car2.jpg" alt="carousel2">
                     <div class="carousel-caption">
                         <h1 id="car-naslov">Live glazba, gledanje utkmica, karaoke</h1>
                    </div>
            </div>
            <div class="item ">
                <img src="./img/car3.jpg" alt="carousel3">
                     <div class="carousel-caption">
                         <h1 id="car-naslov">Najbolja hrvatska i strana glazba</h1>
                    </div>
            </div>
        </div>

        <a href="#theCarousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span></a>
        <a href="#theCarousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span></a>

    </div>

    <footer>
        <p id="ft-text">Kolonia, Copyright &copy; 2017</p>
    </footer>

    
</body>
</html>