<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title>Wiki non-officiel de RLCraft</title>
    <link rel="icon" type="image/png" href="images/Logo.png" />
    <link rel="stylesheet" type="text/css" href="css/Connection.css" />
    <link rel="stylesheet" type="text/css" href="css/Index.css" />
    <link rel="stylesheet" type="text/css" href="css/PremierPas.css" />
    <link rel="stylesheet" type="text/css" href="css/forum.css" />
    <link rel="stylesheet" type="text/css" href="css/Police.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Pour le bouton scroll to top -->
</head>

<body>   
    <header class='pageEntiere'>
        <?php include_once('header.php'); ?>
        <?php if (isset($_SESSION['connecte'])) { ?>

        <div class="texteIntro">
        <p>Ici vous trouverez tout les tutos qu'on réalisé les membres a propos du modPack !</p>
        <p>Vous avez également la possibilité de créer vos propres tutos !!</p>
        <div id="bouton" class="flecheLien">
            <a href="#forum"><span></span></a>
        </div>
    </div>
    </header>

    <div id='forumT'>
        <div id='listMessage'></div>
        <div id='forum'></div>
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
    <script type="text/javascript" src="js/forum.js"></script>
    <script type="text/javascript" src="js/Index.js"></script>
    <script type="text/javascript" src="js/Connexion.js"></script>

</body>
</html>