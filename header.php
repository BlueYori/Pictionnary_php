<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

    <meta charset="utf-8">
    <title>Pictionnary</title>
    <meta name="description" content="description">
    <meta name="author" content="Stéphanie Carrié">


    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="custom-icons/css/custom-icons.css">
    <link type="text/css" rel="stylesheet" href="neko-framework/external-plugins/external-plugins.min.css">
    <link type="text/css" rel="stylesheet" href="neko-framework/css/layout/neko-framework-layout.css">
    <link type="text/css" rel="stylesheet" id="color" href="neko-framework/css/color/neko-framework-color.css">
    <script src="https://apis.google.com/js/platform.js" async defer>
        {
            lang: 'fr'
        }
    </script>
</head>
<body>
<div class="container">

    <?php session_start();

    if (isset($_SESSION['user'])) {
    ?>
    <header class="menu-header navbar-fixed-top" role="banner">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html">
                        <h1>Stéphanie Carrié</h1>
                    </a>
                    <!-- /Logo -->
                </div>
                <div class="collapse navbar-collapse">
                    <!-- Main navigation -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="neko-mega-menu-trigger">
                            <a href="index.html" class="active has-sub-menu">Accueil</a>
                        </li>

                        <li>
                            <a href="logout.php" class="has-sub-menu">Déconnexion</a>
                        </li>
                    </ul>
                    <!-- / End main navigation -->
                </div>


            </nav>
        </div>

    </header>

    <main id="content">
        <!-- form-->
        <section class="pt-medium pb-medium">
            <div class="container">
                <!-- Image with caption boxed -->
                <section class="slice">
                    <div class="ln-doc-example">
                        <div class="box main-color">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?= $_SESSION['user']['profilepic'] ?>" class="img-responsive mb-sm"
                                         alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="no-mt">Bonjour <?= $_SESSION['user']['prenom'] ?> !</h2>

                                    <div class="g-plusone" data-annotation="inline" data-width="300"></div>
                                    <!-- Load Facebook SDK for JavaScript -->
                                    <div id="fb-root"></div>
                                    <script>(function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>

                                    <!-- Your like button code -->
                                    <div class="fb-like"
                                         data-href="http://netflix.com"
                                         data-layout="standard"
                                         data-action="like"
                                         data-show-faces="true">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <a href="https://twitter.com/intent/tweet?screen_name=stephie_highopes" class="twitter-mention-button">Tweet to @stephie_highopes</a>
                                    <script>!function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                            if (!d.getElementById(id)) {
                                                js = d.createElement(s);
                                                js.id = id;
                                                js.src = p + '://platform.twitter.com/widgets.js';
                                                fjs.parentNode.insertBefore(js, fjs);
                                            }
                                        }(document, 'script', 'twitter-wjs');</script>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Image  with caption boxed -->
            </div>


            <?php
            } else {
            ?>

            <br/>

            <div class="col-md-12 box padding-medium clearfix light-color">
                <form class="inscription mb15 pb40 form-minimal" action="req_login.php" method="post"
                      name="login">
                    <?php if (isset($_GET['erreur'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_GET['erreur'] ?>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-6">

                            <section>

                                <div class="form-group">
                                    <label for="email">E-mail :</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="email"
                                           required/>
                                    <span class="form_hint help-block">Format attendu "name@something.com"</span>
                                </div>

                                <div class="form-group">
                                    <label for="password">Mot de passe :</label>
                                    <input type="password" class="form-control" name="password" required
                                           placeholder="Mot de passe">
                                </div>
                            </section>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-lg btn-primary" id="submit">Se connecter</button>
                            <div class="result"></div>
                        </div>
                    </div>
                </form>
            </div>

</div>

<?php
}
?>
</div>
</section>
</main>
</body>
</html>
