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
    <title>Pictionnary - Inscription</title>
    <meta name="description" content="description">
    <meta name="author" content="Stéphanie Carrié">


    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="custom-icons/css/custom-icons.css">
    <link type="text/css" rel="stylesheet" href="neko-framework/external-plugins/external-plugins.min.css">
    <link type="text/css" rel="stylesheet" href="neko-framework/css/layout/neko-framework-layout.css">
    <link type="text/css" rel="stylesheet" id="color" href="neko-framework/css/color/neko-framework-color.css">


<body>
<div id="global-wrapper">
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
                            <a href="features-bootstrap.html" class="has-sub-menu">Connexion</a>
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
                <div class="col-md-12 text-center heading">
                    <h1>Inscrivez-vous</h1>
                </div>
                <div class="col-md-12 box padding-medium clearfix light-color">
                    <form class="inscription mb15 pb40 form-minimal" action="req_inscription.php" method="post"
                          name="inscription">
                        <div class="row">
                            <div class="col-md-6">

                                <section>
                                    <span
                                        class="required_notification">Les champs obligatoires sont indiqués par *</span>

                                    <div class="form-group">
                                        <label for="email">E-mail* :</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Entrez votre E-mail" required autofocus/>
                                        <!-- ajouter à input l'attribut qui lui donne le focus automatiquement -->
                                        <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->
                                        <!-- Name: Il est utilisé pour le PHP
                                             Id: c'est un attribut lu par le navigateur-->
                                        <!-- C'est l'id qui est égal à l'attribut for ? -->
                                        <span class="form_hint help-block">Format attendu "name@something.com"</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="mdp1">Mot de passe :</label>
                                        <input type="password" class="form-control" name="password" id="mdp1"
                                               pattern="^[a-zA-Z0-9]{6,8}$" onkeyup="validateMdp2()"
                                               title="Le mot de passe doit contenir de 6 à 8 caractères alphanumériques."
                                               required placeholder="Mot de passe">
                                        <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->
                                        <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->
                                        <!-- spécifiez l'expression régulière: le mot de passe doit être composé de 6 à 8 caractères alphanumériques -->
                                        <!-- Le title sera affiché lorsque l'utilisateur ne respecte pas la contrainte -->
                                        <!-- encore une fois, quelle est la différence entre name et id pour un input ? -->
                                        <span class="form_hint help-block">De 6 à 8 caractères alphanumériques.</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="mdp2">Confirmez mot de passe :</label>
                                        <input type="password" class="form-control" id="mdp2" required
                                               onkeyup="validateMdp2()" required
                                               placeholder="Confirmez le mot de passe">
                                        <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->
                                        <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->
                                        <!-- Nous n'avons pas mis d'attribut Name car on a pas besoin d'envoyer dinfo avec le formulaire -->
                                        <!-- quel scénario justifie qu'on ait ajouté l'écouter validateMdp2() à l'évènement onkeyup de l'input mdp1 ? -->
                                        <span class="form_hint help-block">Les mots de passes doivent être égaux.</span>
                                        <script>
                                            validateMdp2 = function (e) {
                                                var mdp1 = document.getElementById('mdp1');
                                                var mdp2 = document.getElementById('mdp2');
                                                var regex = /^[a-zA-Z0-9]{6,8}$/;
                                                if (regex.test(mdp1.value) && mdp1.value == mdp2.value) {
                                                    // ici on supprime le message d'erreur personnalisé, et du coup mdp2 devient valide.
                                                    document.getElementById('mdp2').setCustomValidity('');
                                                } else {
                                                    // ici on ajoute un message d'erreur personnalisé, et du coup mdp2 devient invalide.
                                                    document.getElementById('mdp2').setCustomValidity('Les mots de passes doivent être égaux.');
                                                }
                                            }
                                        </script>
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Nom :</label>
                                        <input type="text" class="form-control" name="nom" id="nom"
                                               placeholder="Entrez votre nom"/>

                                        <div class="form-line"></div>
                                    </div>


                                    <div class="form-group">
                                        <label for="prenom">Prénom :</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom"
                                               placeholder="Entrez votre prénom" required/>
                                        <!-- ajouter à input l'attribut qui dit que c'est un champs obligatoire -->
                                        <!-- ajouter à input l'attribut qui donne une indication grisée (placeholder) -->
                                        <div class="form-line"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="telephone">Téléphone :</label>
                                        <input type="text" class="form-control" name="tel" id="tel"
                                               placeholder="Entrez votre n° de téléphone"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="site">Site web :</label>
                                        <input type="url" class="form-control" name="website"
                                               placeholder="Entrez votre site web"/>
                                    </div>
                                </section>
                            </div>


                            <div class="col-md-6">
                                <section>
                                    <br/>

                                    <div class="form-group">
                                        <label for="sexe">Sexe :</label>

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="sexe" id="Homme" value="homme" checked="">
                                                Homme<br>
                                                <input type="radio" name="sexe" id="Femme" value="Femme">
                                                Femme<br>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="birthdate">Date de naissance :</label>
                                        <input type="date" class="form-control" name="birthdate" id="birthdate"
                                               placeholder="JJ/MM/AAAA" required onchange="computeAge()"/>
                                        <script>
                                            computeAge = function (e) {
                                                try {
                                                    var birthday = document.getElementById("birthdate").valueAsDate;
                                                    var date_actuelle = new Date();
                                                    var anneeP = date_actuelle.getFullYear() - birthday.getFullYear();

                                                    if (date_actuelle.getMonth() < birthday.getMonth()) {
                                                        anneeP--;
                                                    }
                                                    else {
                                                        if (date_actuelle.getDate() < birthday.getDate()) {
                                                            anneeP--;
                                                        }
                                                    }

                                                    age.value = anneeP;
                                                } catch (e) {
                                                    age.value = "";
                                                }
                                            }
                                        </script>
                                        <span class="form_hint help-block">Format attendu "JJ/MM/AAAA"</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="age">Age:</label>
                                        <input type="number" class="form-control" name="age" id="age" disabled/>
                                        <!-- Disabled sert à griser la case -->
                                    </div>

                                    <div class="form-group">
                                        <label for="ville">Ville :</label>
                                        <input type="text" class="form-control" name="ville" id="ville"
                                               placeholder="Entrez votre ville"/>
                                    </div>

                                    <div class="form-control">
                                        <label for="taille">Taille :</label>
                                        <input type="range" name="taille" id="taille" min="0" max="2.50" step="0.01"/>
                                    </div>
                                    <br/>

                                    <div class="form-control">
                                        <label for="couleur">Couleur :</label>
                                        <input type="color" name="couleur" id="couleur"/>
                                    </div>

                                    <div class="form-group">
                                        <br/>
                                        <label for="profilepicfile">Photo de profil:</label>
                                        <input type="file" id="profilepicfile" onchange="loadProfilePic(this)"/>
                                        <!-- l'input profilepic va contenir le chemin vers l'image sur l'ordinateur du client -->
                                        <!-- on ne veut pas envoyer cette info avec le formulaire, donc il n'y a pas d'attribut name -->
                                        <span class="form_hint">Choisissez une image.</span>
                                        <input type="hidden" name="profilepic" id="profilepic"/>
                                        <!-- l'input profilepic va contenir l'image redimensionnée sous forme d'une data url -->
                                        <!-- c'est cet input qui sera envoyé avec le formulaire, sous le nom profilepic -->
                                        <canvas id="preview" width="0" height="0"></canvas>
                                        <!-- le canvas (nouveauté html5), c'est ici qu'on affichera une visualisation de l'image. -->
                                        <!-- on pourrait afficher l'image dans un élément img, mais le canvas va nous permettre également
                                        de la redimensionner, et de l'enregistrer sous forme d'une data url-->
                                        <script>
                                            // on récupère le canvas où on affichera l'image
                                            loadProfilePic = function (e) {
                                                var canvas = document.getElementById("preview");
                                                var ctx = canvas.getContext("2d");
                                                // on réinitialise le canvas: on l'efface, et déclare sa largeur et hauteur à 0

                                                ctx.fillRect(0, 0, canvas.width, canvas.height);
                                                canvas.width = 0;
                                                canvas.height = 0;
                                                // on récupérer le fichier: le premier (et seul dans ce cas là) de la liste
                                                var file = document.getElementById("profilepicfile").files[0];
                                                // l'élément img va servir à stocker l'image temporairement
                                                var img = document.createElement("img");
                                                // l'objet de type FileReader nous permet de lire les données du fichier.
                                                var reader = new FileReader();
                                                // on prépare la fonction callback qui sera appelée lorsque l'image sera chargée
                                                reader.onload = function (e) {
                                                    //on vérifie qu'on a bien téléchargé une image, grâce au mime type
                                                    if (!file.type.match(/image.*/)) {
                                                        // le fichier choisi n'est pas une image: le champs profilepicfile est invalide, et on supprime sa valeur
                                                        document.getElementById("profilepicfile").setCustomValidity("Il faut télécharger une image.");
                                                        document.getElementById("profilepicfile").value = "";
                                                    }
                                                    else {
                                                        // le callback sera appelé par la méthode getAsDataURL, donc le paramètre de callback e est une url qui contient
                                                        // les données de l'image. On modifie donc la source de l'image pour qu'elle soit égale à cette url
                                                        // on aurait fait différemment si on appelait une autre méthode que getAsDataURL.
                                                        img.src = e.target.result;
                                                        // le champs profilepicfile est valide
                                                        document.getElementById("profilepicfile").setCustomValidity("");
                                                        var MAX_WIDTH = 96;
                                                        var MAX_HEIGHT = 96;
                                                        var width = img.width;
                                                        var height = img.height;
                                                        var ratio = 0;

                                                        // A FAIRE: si on garde les deux lignes suivantes, on rétrécit l'image mais elle sera déformée
                                                        // Vous devez supprimer ces lignes, et modifier width et height pour:
                                                        //    - garder les proportions,
                                                        //    - et que le maximum de width et height soit égal à 96
                                                        var width = MAX_WIDTH;
                                                        var height = MAX_HEIGHT;

                                                        if (width > height) {
                                                            ratio = width / MAX_WIDTH;
                                                            width = MAX_WIDTH;
                                                            height = MAX_HEIGHT / ratio;
                                                        }
                                                        else(width < height)
                                                        {
                                                            ratio = height / MAX_HEIGHT;
                                                            height = MAX_HEIGHT;
                                                            width = MAX_WIDTH / ratio;
                                                        }

                                                        canvas.width = width;
                                                        canvas.height = height;
                                                        // on dessine l'image dans le canvas à la position 0,0 (en haut à gauche)
                                                        // et avec une largeur de width et une hauteur de height
                                                        ctx.drawImage(img, 0, 0, width, height);
                                                        // on exporte le contenu du canvas (l'image redimensionnée) sous la forme d'une data url
                                                        var dataurl = canvas.toDataURL("image/png");
                                                        // on donne finalement cette dataurl comme valeur au champs profilepic
                                                        document.getElementById("profilepic").value = dataurl;
                                                    }
                                                    ;
                                                };
                                                reader.readAsDataURL(file);
                                            }
                                        </script>
                                    </div>
                                </section>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-lg btn-primary" id="submit">Soumettre formulaire
                                </button>
                                <div class="result"></div>
                            </div>

                        </div>
                </div>
                </form>
            </div>
</div>
</section>
<!-- / form -->
</main>
<!-- / content -->

</body>
</html>