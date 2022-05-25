<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="fontawesome/css/all.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/w3.css" type="text/css">
    <title>Connected</title>
</head>
<body>
    <?php
        $email=$_POST['email'];
        $mdp=$_POST['mdp'];

    //connection bdd
    // include("config.php");
    // $ins = $base->prepare("SELECT * FROM `inscription`");
    // $ins->execute();

    // while($result=$ins->fetch()){
    //     // echo $result['nom_proprietaire'];

    //     $emaildb=$result['email'];
    //     $mdpdb=$result['mdp'];
    //     if($emaildb==$email && $mdpdb==$mdp) {
    
    ?>
    <header>
        <nav class="connect-nav">
            <ul>
                <li><a href="#" class="nav-bar"><i class="fab fa-facebook"></i> Espace Membre </a></li>
                <li><a href="#" class="nav-bar"> Mon compte </a></li>
                <li><a href="connection.php" class="nav-bar">Deconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="inscr">
        	<i class="fab fa-facebook"></i>
            <b>Bonjour <label for=""><i class="fab fa-facebook"></i> Fabien</label></b> 
            
            <div class="content-insc">

                <form action="" class="formular">
                    <label class="label-input" for=""><b>Nom d'Utilisateur: </b></label><br>
                    <?php echo "<label class='input-form'>Fabien Rakotoarivony</label><br>" ?>

                    <label class="label-input" for=""><b>email:</b></label><br>
                    <?php echo "<label class='input-form'>Fabien@gmail.com</label>" ?>
                    
                    <br><label class="label-input" for=""><b>Photo de Profil jpeg ou png:</b></label><br>
                    <?php echo "<label class='input-form'>Fabien@gmail.com</label>" ?>
                    <input type="file" required class="input-form" name="mdp" id=""><br>

                    <button type="submit" class="btn btn-primary bouton-env top-2">Envoyer</button>
                
                </form>
               
        </div>
                <div class="oublie-mdp">
                    <a href="#">Modifier Mot de Passe</a>
                    <a class="btn btn-danger"  href="">Suprimer Compte</a>
                </div>
        <div class="photo-profil">
            <img src="" alt="">
        </div>
    </main>

                <?php
                        //     } else {
                        //         echo '<a href="">Mot de passe ou email incorect</a>';
                        //     }
                        // }

                ?>








    </body>
</html>