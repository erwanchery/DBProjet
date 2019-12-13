<?php
session_start();
?>

<nav>
    <ul id="menu-deroulant">
        <li><a href="index.php"><img src="images/Logo.png" alt="Logo" class="logo" /></a></li>
        <li><a href="#videoPresentation">À PROPOS</a></li>
        <li><a href="#installation">INSTALLATION</a></li>
        <li><a href="index.php">CONTRIBUER</a></li>
        <?php if (isset($_SESSION['connecte']) && ($_SESSION['connecte'] == 1 || $_SESSION['connecte'] == 2)) { ?>
            <li><a href="premierPas.php">PREMIER PAS</a></li>
            <li><a href="wiki.php">WIKI</a>
            <ul>
                <li><a href="index.php/#videoPresentation">À PROPOS</a></li>
                <li><a href="index.php/#installation">INSTALLATION</a></li>
                <li><a href="premierPas.php">PREMIER PAS</a></li>
                <li><a href="forum.php">FORUM</a></li>
            </ul>
        </li>
        <?php } else { ?>
            <li><a href="#" class="connexion">PREMIER PAS</a></li>
            <li><a href="#" class="connexion">WIKI</a>
            <ul>
                <li><a href="index.php/#videoPresentation">À PROPOS</a></li>
                <li><a href="index.php/#installation">INSTALLATION</a></li>
                <li><a href="#" class="connexion">PREMIER PAS</a></li>
                <li><a href="#" class="connexion">FORUM</a></li>
            </ul>
        </li>
        <?php } ?>
        <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] == 2) { ?>
            <li><a href="espaceAdmin.php">ESPACE ADMIN</a></li> 
        <?php } ?>  

        <?php if (isset($_SESSION['connecte']) && ($_SESSION['connecte'] == 1 || $_SESSION['connecte'] == 2)) { ?>
            <li><a href="#" class="deconnexion">SE DECONNECTER</a></li>
        <?php } else { ?>
            <li><a href="#" class="connexion">SE CONNECTER</a></li>
        <?php } ?>
    </ul>
</nav>

<!-- Formulaire de connexion -->
<div id="formulaireConnexion" class="nonAfficher fond">
    <form class="fondContenu animation" action="index.php" method="POST">
        <div class="croixFermer">
            <span class="fermerFenetre" title="fermer fenetre de connexion">&times;</span>
            <img src="images/Logo.png" alt="logoSite" class="logo">
        </div>

        <div class="formulaire">
            <label for="uname"><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrez votre pseudo" id="pseudo" name="pseudo" required>

            <label for="mdp"><b>Mot de passe</b></label>
            <input type="password" placeholder="Enter votre mot de passe" id="password" name="password" required>
            
            <div id="msgErreur"></div>
            <button type="submit">Se connecter</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
            </label>
        </div>

        <div class="formulaire">
            <button type="button" class="boutonCancel fermerFenetre">Fermer</button>
            <span class="mdp"><a href="#">Mot de passe oublié ?</a></span>
        </div>
    </form>
</div>