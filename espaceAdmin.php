<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Wiki non-officiel de RLCraft</title>
    <link rel="icon" type="image/png" href="images/Logo.png" />
    <link rel="stylesheet" type="text/css" href="css/Connection.css" />
    <link rel="stylesheet" type="text/css" href="css/Index.css" />
    <link rel="stylesheet" type="text/css" href="css/Police.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="css/espaceAdmin.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> <!-- Pour le bouton scroll to top -->
</head>

<body>
<header class="pageEntiere">

<?php include_once('header.php'); ?>

<div class="texteIntro">
    <h1><img src="images/Logo.png" class="logo" alt="Logo" /> Espace Administrateurs</h1>
    <p>Ici vous pourrez consulter la liste des personnes inscrites,<br>Pour éventuellement pouvoir bannir quelqu'un, changer ces droits, ou ajouter une personne.
    </p>
    <div id="bouton" class="flecheLien">
        <a href="#dtable"><span></span></a>
    </div>
</div>

</header>

<?php 
include_once('connexionSQL.php');
if($_SESSION['connecte'] == 2) { ?>

<div class="pageEntiere2" id="dtable">
    <div id='msgValidation'></div>
    <table id="table"></table>
    <button type="button" id="add_user">Ajouter un utilisateur</button>

    <div id="formAdd">
        <form action="#" method="POST">
            <label for="pseudo2"><b>Pseudo : </b></label>
            <input type="text" id="pseudo2" name="pseudo2" required>

            <label for="password2"><b>Mot de passe :</b></label>
            <input type="password" id="password2" name="password2" required>
            
            <label for="mail"><b>Adresse mail :</b></label>
            <input type="text" id="mail" name="mail" required>

            <label for="droit"><b>Droits :</b></label>
            <input type="text" id="droit" name="droit" maxlength='1' placeholder='0 => Pas de droit, 1 => Adhérent, 2 => Modérateur' required>

            <div id="msgErreur2"></div>
            <button type="submit" id='submitForm'>Ajouter un utilisateur</button>
            <button type="button" id="boutonCancel" class="boutonCancel fermerFenetre">Fermer</button>
        </form>
    </div>
</div>
<?php } else { header('Location: index.php'); } ?>
<footer>
        <p class="texte">Retrouver Shivaxi sur ses réseaux sociaux</p>
        <div class="iconesFooter">
            <a href="#"><img src="images/youtubeIcone.png" alt="lienYT"></a>
            <a href="#"><img src="images/twitterIcone.png" alt="lienTwitter"></a>
            <a href="#"><img src="images/twitchIcone.jpg" alt="lienTwitch"></a>
            <a href="#"><img src="images/instagramIcone.png" alt="lienTwitch"></a>
        </div>
    </footer>

    <a id="boutonDebut"></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/Index.js"></script>
    <script type="text/javascript" src="js/espaceAdmin.js"></script>
    <script type="text/javascript" src="js/Connexion.js"></script>

</body>
</html>