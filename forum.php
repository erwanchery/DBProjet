<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title>Wiki non-officiel de RLCraft</title>
    <link rel="icon" type="image/png" href="images/Logo.png" />
    <link rel="stylesheet" type="text/css" href="css/Connection.css" />
    <link rel="stylesheet" type="text/css" href="css/Index.css" />
    <link rel="stylesheet" type="text/css" href="css/PremierPas.css" />
    <link rel="stylesheet" type="text/css" href="css/Police.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Pour le bouton scroll to top -->
</head>

<body>
    <?php include_once('header.php'); ?>
    <?php if (isset($_SESSION['connecte'])) { ?>
        






    <?php } else { header('Location: index.php'); } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/Index.js"></script>
    <script type="text/javascript" src="js/Connexion.js"></script>

</body>
</html>