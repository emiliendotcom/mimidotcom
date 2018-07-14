<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include('bddconnect.php'); ?>
<html>

<head>
    <title>Emilien Triau - Développeur Web - Technicien Informatique</title>
    <meta charset="utf-8" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/portrait.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                    <div class="navbar-header">
                        <a data-toggle="dropdown" class="navbar-brand survol">Emilien Triau | <i class="fa fa-twitter fa-lg"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="twitter-timeline" data-width="500px" data-height="500px" data-theme="light" href="https://twitter.com/emiliendotcom">Tweets by emiliendotcom</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                <a href="https://twitter.com/emiliendotcom" class="twitter-follow-button" data-show-count="false">Follow @emiliendotcom</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>

                        </ul>
                    </div>
                    <ul class="nav navbar-nav">
                        <li <?php if ($nbPage==0 ){ echo 'class="active"'; }?>> <a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a> </li>
                        <li class="<?php if ($nbPage == 1){ echo " active "; }?> dropdown"> <a href="digitalart.php">Galeries</a></li>
                        <li <?php if ($nbPage==2 ){ echo 'class="active"'; }?>> <a href="cv.php">CV</a> </li>
                        <li <?php if ($nbPage==3 ){ echo 'class="active"'; }?>> <a href="contact.php">Contact</a> </li>
                        <li <?php if ($nbPage==4 ){ echo 'class="active"'; }?>> <a data-toggle="dropdown" class="survol"><i class="fa fa-unlock"></i> Connexion <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <form method="post" action="">
                                    <fieldset>
                                        <p>
                                            <label for="pseudo"><span class="glyphicon glyphicon-user"></span> Identifiant :</label><input name="pseudo" type="text" id="pseudo" /><br />
                                            <label for="password"><span class="fa fa-unlock"></span> Mot de Passe :</label><input type="password" name="password" id="password" />
                                        </p>
                                    </fieldset>
                                    <p class="text-center"><input type="submit" value="Connexion" /></p>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
