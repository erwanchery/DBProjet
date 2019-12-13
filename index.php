<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Wiki non-officiel de RLCraft</title>
    <link rel="icon" type="image/png" href="images/Logo.png" />
    <link rel="stylesheet" type="text/css" href="css/Connection.css" />
    <link rel="stylesheet" type="text/css" href="css/Index.css" />
    <link rel="stylesheet" type="text/css" href="css/Police.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Pour le bouton scroll to top -->
</head>

<body>
    <header class="pageEntiere">

        <?php include_once('header.php'); ?>

        <div class="texteIntro">
            <h1><img src="images/Logo.png" class="logo" alt="Logo" /> RLCraft Minecraft</h1>
            <p>Le modPack le plus dur de Minecraft</p>
            <p>RLCraft est LE modPack Minecraft se basant sur l'aventure, <br> Apportant une dimmension bien plus
                réalise au jeu de base. </p>
            <p>Ce site est un wiki non-officiel de ce modPack, <br> recensant tout les ajouts et astuces de ce dernier !
            </p>
            <div id="bouton" class="flecheLien">
                <a href="#videoPresentation"><span></span></a>
            </div>
        </div>

    </header>
    
    <main>
        <!-- Premiere page contenant la vidéo et le texte de présentation -->
        <section id="videoPresentation" class="pageEntiere aPropos">
            <article class="texteVideo texte">
                <h1>A PROPOS</h1>
                <p class="question">Qui a réalisé ce modPack ?</p>
                <p>Ce modPack a été réalisé par Shivaxi en grande partie en stream. Il a également utilisé des mods
                    existant pour ne pas tout avoir a re-coder lui même. <br> La vidéo de gauche est une présentation du
                    modPack par Shivaxi.</p>
                <p class="question">Qui est Shivaxi ?</p>
                <p>Shivaxi est un youtubeur streamer Americain réalisant diverse vidéos. Ses streams sont principalement
                    orienté autour de Minecraft.</p>
                <p class="question">Que peut-on trouver dans ce modPack ?</p>
                <p>Ce modPack ajoute énormément de contenu au jeu de base : Des donjons, des armes, des potions, des
                    armures, un arbre de compétences et aptitudes, de nouveaux monstres, une dimmension bien plus
                    réaliste avec la gestion de la temperature, de la soif, et bien plus encore ! Les codes du jeu de
                    base on été totalement changé.</p>
                <p class="question">Qu'est ce qui rends ce modPack si difficile ?</p>
                <p>Comme expliqué par Shivaxi lui même, dans ce modPack tout ou presque essayera de vous tuer. La survie
                    est terriblement compliqué, mais pas impossible !<br> Ce wiki est là pour vous aider a passer vos
                    premières nuits vivant !</p>
            </article>

            <aside class="videoConteneur">
                <iframe src="https://www.youtube.com/embed/tbRAUWNf-2Y"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </aside>
        </section>

        <!-- Deuxieme page contenant les méthodes d'installation -->
        <section id="installation" class="pageEntiere">
            <div class="enTete">
                <h1>INSTALLATION DU MODPACK</h1>
                <p>La vidéo de présentation vous a convaincu de jouer a ce modPack ?! Alors vous êtes au bon endroit !
                    <br> Ici, je vais vous expliquez comment installer le modPack via l'application twitch, ou via Forge
                    Installer.</p>
            </div>

            <div class="installationContenu">
                <article class="texteInstallationTwitch texte flexItem">
                    <h2>VIA L'APPLICATION TWITCH</h2>
                    <ul>
                        <li>Télécharger l'application twitch si ce n'est pas déjà fait, et connecter vous (ou
                            inscrivez-vous a fortiori) sur l'application</li>
                        <li>Aller dans l'onglet "Modifs"</li>
                        <li>Selectionner le jeu Minecraft (connecter-vous a votre Compte Mojang (achetez-le jeu a
                            fortiori et créer un compte)</li>
                        <li>Puis parcourir les packs de mods</li>
                        <li>Chercher le pack RLCraft et installer-le</li>
                        <li>Et voilà, vous pouvez désormais jouer a jeu, lancer le tout simplement depuis l'onglet Mes
                            Jeux</li>
                    </ul>
                    <img src="images/RLCraftLauncher.png" class="imgInstallation" alt="imgLauncher">
                </article>

                <article class="texteInstallationMinecraft texte flexItem">
                    <h2>VIA FORGE INSTALLER</h2>
                    <ul>
                        <li>Achetez Minecraft <a href=https://www.minecraft.net>ici </a> puis crée un compte, connectez-vous, télécharger et installer le jeu</li>
                        <li>Télécharger forge Installer 1.14 <a href=https://www.minecraftforge.net/forum>ici </a> puis installer le.</li>
                        <li>Télécharger le modPack RLCraft <a href=https://www.curseforge.com/minecraft/modpacks/rlcraft/files/2791782>ici</a> </li> 
                        <li>Utilise les touches window + R pour ouvrir la recherche window et taper %appdata%.</li>
                        <li>Dans le dossier .minecraft, décompresser le .zip du modPack</li>
                        <li>Lancer maintenant minecraft, vous devriez avoir une nouvelle éxécutable depuis le launcher.
                            Lancez tout simplement cette éxécutable pour jouer à la version moddé !</li>
                    </ul>
                    <img src="images/Launcher.png" class="imgInstallation" alt="imgLauncher">
                </article>
            </div>
        </section>
    </main>

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
    <script type="text/javascript" src="js/Index.js"></script>
    <script type="text/javascript" src="js/Connexion.js"></script>

</body>
</html>