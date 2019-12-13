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
    <header class="pageEntiere">

        <?php include_once('header.php'); ?>
        <?php if (isset($_SESSION['connecte'])) { ?>
            
        <div class="texteIntro">
            <h1><img src="images/Logo.png" class="logo" alt="Logo" /> RLCraft Minecraft</h1>
            <p>Vous venez d'installer le modPack, avez jouer une petite heure, et vous etes mort 30 fois ?!</p>
            <p>Vous n'avez pas obtenu de bois en minant un arbre ? Vous avez faim, soif, et êtes totalement perdu ! <br>
                Et pour courroner le tout, un dragon a souffler tout vos espoirs de survie ?</p>
            <p>Alors vous êtes au bon endroit, ce guide va vous permettre de passer vos premiers jours dans le jeu sans
                trop mourrir !<br> Mais oui... vous allez mourrir... beaucoup de fois.</p>
            <div id="bouton" class="flecheLien">
                <a href="#premierJours"><span></span></a>
            </div>
        </div>

    </header>

    <main>
        <!-- Premiere page contenant les informations necessaire pour passer les premiers jours -->
        <section id="premierJours">
            <article>
                <aside>
                    <h1>Premieres Impressions</h1>
                    <hr>
                    <p>RL-Craft fait tout son possible pour rendre le jeu plus difficile a travers plus modPack et
                        sous
                        différente forme. Vous constaterai des différences avec le jeu Vanilla dés votre apparition
                        dans le
                        monde, peut importe ou vous apparaissez.<p>
                </aside>

                <p>Tout d'abord, vous remarquerez 2 nouveaux
                    indicateurs dans
                    l'interface : le barème de temperature et la jauge de soif. Vous pourrez également remarquez
                    des
                    changements dans votre environnement suivant ou vous avez apparu.</p>
                <img src="images/nouvelleInterface.jpg" alt="nouvelleInterface" />
                <p class="legendeImage">Nouvelle Interface</p>
                <h2>Temperatures</h2>
                <p>Votre personnage est désormais influencé par la temperature. Votre temperature actual est visible
                    depuis l'interface. Elle est représentée par le petit rond gris. Si une flèche vers le haut ou
                    bas
                    apparait, cela signifie que votre temperature monte ou descend. Si celle-ci augmente ou diminue
                    trop, l'icone deviendra jaune ou bleu, puis enflamé ou gelée. Une fois la température maximal ou
                    minimal atteinte, votre personnage souffira d'hypermetrie ou d'hypometrie, vous infligeant
                    régulièrement des dégâts.</p>
                <p>Vous avez cependant plusieurs manières de réguler votre température</p>
                <ul>
                    <li>Les biomes (certains sont plus fort que d'autre, ou plus chaud a fortiori. Etre dans un
                        desert
                        augmentera donc bien plus vite votre température qu'etre en plein milieu de la plaine</li>
                    <li>Les saisons : il y a désormais un cycle de saison.</li>
                    <li>Etre proche de source chaud (ou froide) : Lava, feux de camps, four (glace, eau)</li>
                    <li>Deux nouvelles armures vont également vous aider : L'armure de gel (et de laine)</li>
                </ul>

                <h2>La soif</h2>
                <p>Avec la gestion de la température, la gestion de la soif joue maintenant un role majeur dans votre
                    survie. La jauge de soif est représentée par des gouttes d'eau au dessus de votre jauge de faim.
                    Cette jauge fonctionne comme la jauge de faim. Cependant cette barre descend bien plus vite que la
                    jauge de faim, gardez donc un oeil dessus ! <br> Si cette jaude descend trop bas, votre écran
                    deviendra de plus en plus flou jusqu'à ce que vous mourrez</p>
                <p>Pour boire vous avez différentes options : Vous pouvez soit boire dans l'eau trouvé naturellement en
                    appuiyant sur shift et click droit sur l'eau avec une main vide. Cependant les eaux naturels sont
                    souvent pollués, et vous appliquerons le debuff "soif" réduisant votre jauge de soif plus vite
                    pendant 30sec. <br> Ou alors, vous pourrez craft des gourdes, fiole purifiées, ou encore différents
                    breuvages appliquant différents buff. (appuiyer sur E, puis taper "Juice" dans la barre de
                    recherche)</p>

                <h2>L'environnement</h2>
                <p>L'hostilité de RL-Craft ne se révèle pas forcément tout de suite, suivant là ou vous apparaissez.
                    Ceci étant dit vous allez être confronté a de nombreuses situation dangereuse dans le jeu</p>
                <p>Si vous êtes un joueur de Minecraft Vanilla, vous aurez remarquez que les arbres ne vous on pas
                    donner de bois, nous reviendrons là dessus plus tard.<br>Vous aurez sans doute aussi remarquez qu'il
                    a maintenant des cailloux sur le sol. Si vous êtes vraiment chanceux vous pourrez également trouver
                    un village amical, cependant vous serez plus amène de tomber sur des structures ou donjons remplis
                    de créaturs hostiles</p>

                <aside>
                    <h1>Récolter vos premiers objets</h1>
                    <hr>
                    <p>Dans cette partie nous allons voir comment faire pour obtenir vos premier objets. Partons du
                        principe que vous n'apparaissez pas dans une zone trop hostile et qu'aucune structures se
                        trouvent a proximité. Vous allez donc devoir vous depêcher de craft un lit pour pouvoir définir
                        votre point de réaparission si jamais vous mourrez (Sans refuge, vous allez très vite mourrir,
                        donc ne perdez pas une seul minute).</p>
                </aside>

                <h2>Fabriquez vos premiers objet</h2>
                <p>Comme dit plus haut, vous ne devez pas perdre 1 seul minute, donc c'est partie !</p>
                <ul>
                    <li>Tout d'abord rammassez du gravier (disponnible proche de l'eau) pour obtenir du silex.</li>
                    <li>Casser ces silex pour en obtenir les fragments (clique gauche avec le silex en main sur une
                        surface solide).</li>
                    <li>Casser des feuilles d'arbres pour obtenir des bout de bois.</li>
                    <li>Vous pouvez enfin craft un couteau !</li>
                    <li>Avec ce couteau coupez de l'herbe pour obtenir des fibres de plante.</li>
                    <li>Vous pouvez maintenant obtenir des ficelles</li>
                    <li>Convertissez ces ficelles en laines (4 ficelles pour 1 laine).</li>
                    <li>Vous aurez maintenant besoin de 3 laines et 3 planches de bois (couper un abre avec une hache,
                        puis poser les blocs de bois et faite clique droit dessus avec la hache pour obtenir des
                        planches de bois.</li>
                    <li>Bien joué ! Vous avez maintenant un lit ! Si vous mourrez vous réaparaiterez sur celui-ci, et
                        non aléatoirement !</li>
                </ul>

            </article>
        </section>

        <!-- Page contenant des astuces en vrac -->
        <section id="astucesVrac">
            <article>
                <aside>
                    <h1>Astuces et Ajouts du modPack</h1>
                    <hr>
                    <p>Dans cette partie nous allons voir une liste non-exhaustives d'astuces en vrac.</p>
                </aside>

                <h2>Ajouts du modPack</h2>
                <p>Cette liste comporte les ajouts apportés au jeu par RL-Craft. Elle sera maintenu a jour selon les
                    versions du modPack.<br></p>
                <h4>Version actuelle : 2.6.3</h4>
                <ul>
                    <li>Le modPack ajoute une tonne de nouveaux monstres, la plupart sont spécifique a certains biomes.
                        Sauf les dragons, les dragons apparaissent de partout.</li>
                    <li>Tant que vous n'avez pas redéfinit votre point d'apparission via un lit ou une Waystone (nous
                        reviendrons là dessus justa après), vous allez apparaitre aléatoirement entre les coordonnées
                        -10 000 et 10 000.</li>
                    <li>Les Waystones vous permettent de redéfinir votre point d'apparission et de voyage plus
                        rapidement dans le monde moyennant quelques niveaux d'experience (plus vous allez loin, plus ce
                        sera cher). Pour activer une Waystone cliquer simplement dessus. Il y a 1 Waystone par village,
                        et elles apparaissent également aléatoirement dans le monde.</li>
                </ul>
                <img src="images/waystone.jpg" alt="imgWaystone">
                <p class="legendeImage">Une Waystone</p>
                <ul>
                    <li>Vous ne pouvez plus rammassez les items en marchant dessus, il faut désormais les rammassez en
                        faisant clique droit, ou en s'accroupissant proche d'eux.</li>
                    <li>Le modPack rajoute maintenant un système de compétance: Pour pouvoir utiliser certaines armes,
                        outils ou armues vous aurez besoin d'un certains nombre de points dans la compétences spécifié.
                        Par exemple, pour porter une armure en diamant, il vous faudra 16 points / 32 en défense. Il
                        vous faudra 8 points dans la compétence "récolte" pour pouvoir utiliser une pelle en fer...
                        Chaque niveau de compétence vous coutera de l'expérience (plus vous monter de niveau, plus le
                        niveau suivant vous coutera cher)</li>
                    <li>Une fois le niveau 5 atteint, appuyer sur "L", et choisissez un arbre. Cet arbre vous permettra
                        de gagner plus d'experience venant de l'arbre choisis (minage, recolte (plantation), ou des
                        monstres tuer). Il vous débloquera aussi de nouvelles competences</li>
                    <li>La plupart des monstres ajoutés au modPack sont apprivoisables, donc oui, vous pouvez avoir et
                        elevé un dragon. Vous pouvez meme les utiliser en tant que monture pour vous déplacer plus vite
                        dans le monde.</li>
                    <li>Le reste viendra plus tard :'(</li>
                </ul>
            </article>
        </section>
        <?php } else { header('Location: index.php'); } ?>
    </main>

    <footer>
        <p class="texte">Retrouver Shivaxi sur ses réseaux sociaux</p>
        <div class="iconesFooter">
            <a href=""><img src="images/youtubeIcone.png" alt="lienYT"></a>
            <a href=""><img src="images/twitterIcone.png" alt="lienTwitter"></a>
            <a href=""><img src="images/twitchIcone.jpg" alt="lienTwitch"></a>
            <a href=""><img src="images/instagramIcone.png" alt="lienTwitch"></a>
        </div>
    </footer>

    <a id="boutonDebut"></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/Index.js"></script>
    <script type="text/javascript" src="js/Connexion.js"></script>
</body>
</html>