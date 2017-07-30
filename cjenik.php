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
                    <li class="active"><a href="cjenik.php" id="color-me"><b>CJENIK</b></a></li>
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
        <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-inverse">
                <tr>
                    <td colspan="3">PIVA</td>
                </tr>
            </thead>
              <tbody>
                <tr>
                <td>Domaće pivo</td>
                <td>0,50 L</td>
                <td>12,00 kn</td>
                </tr>
                <tr>
                <td>Strano pivo</td>
                <td>0,50, 0,35 L</td>
                <td>13,00 kn</td>
                </tr>
                <tr>
                <td>Radler crni</td>
                <td>0,50 L</td>
                <td>13,00 kn</td>
                </tr>
                <tr>
                <td>Osječko crno</td>
                <td>0,50 L</td>
                <td>13,00 kn</td>
                </tr>
                <tr>
                <td>Heineken</td>
                <td>0,40 L</td>
                <td>13,00 kn</td>
                </tr>
                <tr>
                <td>Slavonsko pivo</td>
                <td>0,50 L</td>
                <td>13,00 kn</td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="3">VINA</td>
                </tr>
            </thead>
              <tbody>
                <tr>
                <td>Bijelo vino</td>
                <td>1,00 L</td>
                <td>60,00 kn</td>
                </tr>
                <tr>
                <td>Crno vino</td>
                <td>1,00 L</td>
                <td>60,00 kn</td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <td colspan="3">ALKOHOLNA PIĆA</td>
                </tr>
            </thead>
              <tbody>
                <tr>
                <td>Jegermeister</td>
                <td>1,00 L</td>
                <td>300,00 kn</td>
                </tr>
                <tr>
                <td>Liker</td>
                <td>1,00 L</td>
                <td>160,00 kn</td>
                </tr>
                <tr>
                <td>Stock</td>
                <td>1,00 L</td>
                <td>200,00 kn</td>
                </tr>
                <tr>
                <td>Whiskey-Tequila</td>
                <td>1,00 L</td>
                <td>400,00 kn</td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <td colspan="3">BEZALKOHOLNA PIĆA</td>
                </tr>
            </thead>
              <tbody>
                <tr>
                <td>Cedevita</td>
                <td>0,25 L</td>
                <td>7,00 kn</td>
                </tr>
                <tr>
                <td>Ledeni čaj</td>
                <td>0,33 L</td>
                <td>10,00 kn</td>
                </tr>
                <tr>
                <td>Romequelle emotion</td>
                <td>0,33 L</td>
                <td>8,00 kn</td>
                </tr>
                <tr>
                <td>Mineralna voda</td>
                <td>1,00 L</td>
                <td>10,00 kn</td>
                </tr>
                <tr>
                <td>Mineralana voda Sensation</td>
                <td>0,25 L</td>
                <td>8,00 kn</td>
                </tr>
                <tr>
                <td>Prirodni sok</td>
                <td>0,20 L</td>
                <td>10,00 kn</td>
                </tr>
                <tr>
                <td>Prirodni sok</td>
                <td>0,25 L</td>
                <td>12,00 kn</td>
                </tr>
                <tr>
                <td>Gazirani sok</td>
                <td>0,25 L</td>
                <td>10,00 kn</td>
                </tr>
                <tr>
                <td>Redbull</td>
                <td>0,25 L</td>
                <td>20,00 kn</td>
                </tr>
                <tr>
                <td>Burn, Hell</td>
                <td>0,25 L</td>
                <td>15,00 kn</td>
                </tr>
                <thead>
                <tr>
                    <td colspan="3">TOPLI NAPITCI</td>
                </tr>
            </thead>
              <tbody>
                <tr>
                <td>Kava</td>
                <td>šalica</td>
                <td>6,00 kn</td>
                </tr>
                <tr>
                <td>Kava (šlag, mlijeko)</td>
                <td>šalica</td>
                <td>6,00 kn</td>
                </tr>
                <tr>
                <td>Nescaffe</td>
                <td>šalica</td>
                <td>7,00 kn</td>
                </tr>
                <tr>
                <td>Cappuccino</td>
                <td>šalica</td>
                <td>7,00 kn</td>
                </tr>
                <tr>
                <td>Kakao</td>
                <td>šalica</td>
                <td>7,00 kn</td>
                </tr>
                <tr>
                <td>Topla čokolada</td>
                <td>šalica</td>
                <td>8,00 kn</td>
                </tr>
                <tr>
                <td>Čaj</td>
                <td>šalica</td>
                <td>6,00 kn</td>
                </tr>
                <tr id="podcrtaj">
                <td>Med</td>
                <td>vrećica</td>
                <td>1,00 kn</td>
                </tr>
                </tbody>
                </table>
        </div>
        </div>

    <footer>
        <p id="ft-text">Kolonia, Copyright &copy; 2017</p>
    </footer>
    
</body>
</html>