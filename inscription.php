<!-- INSCRIPTIOON -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/w3.css" type="text/css">
    <!-- <link rel="stylesheet" href="fontawesome/css/all.css" type="text/css"> -->
    <title>Espace Membre</title>
</head>
<body>
    <div class="container">
    <nav class="connect-nav">
        <ul class="nav-bar">
            <li><a href="#" class="nav-bar">Espace Membre </a></li>
                <li><a href="inscription.php" class="nav-bar">Inscription </a></li>
                <li><a href="connection.php" class="nav-bar">Connexion</a></li>
        </ul>
    </nav>

    <div class="inscr">

                <b>inscription</b> 
                <div class="content-insc backgreen">
                    <label id="nom-error" for=""> le nom requis au mois trois caracteres</label><br>
                    <label id="email-error" for="">Email doit etre email valide</label><br>
                    <label id="mdp-error" for="">Mots de passe requis doit contenir au moins six caracteres</label>
                </div>

                <div class="content-insc">

                    <form  action="add.php" method="post" class="formular">

                        <label class="label-input" for=""><b>Nom d'Utilisateur: </b></label><br>
                        <input type="text" placeholder="name" class="input-form form-control" name="name" id=""><br>

                        <label class="label-input" for=""><b>email:</b></label><br>
                        <input type="email" placeholder="email" class="input-form form-control" name="email" id="">

                        <br><label class="label-input" for=""><b>Mot de Passe:</b></label><br>
                        <input type="password" placeholder="mot de passe" class="input-form form-control" name="mdp" id=""><br>

                        <center><button type="submit" name="Submit" class="btn btn-primary top-2">Submit</button></center>
                    
                    </form>

                    <div class="oublie-mdp">
                        <a href="#">J'ai oublie mon mot de passe</a>
                    </div>

                </div>

    </div>
    


    
    <script src="js/app.js"></script>
</body>
</html>