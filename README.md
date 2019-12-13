# READ ME du projet de base de données

## Fonctionnalitées implementés :

> ### Gestion des droits des utilisateurs :
> Il y a 3 niveaux de droit : 
> - Le niveau 0 : L'utilisateur est consideré comme étant un guest sur le site. il n'a donc pas accès aux pages Forum (Wiki > Forum), Premier Pas ainsi que Contribuer
> - Le niveau 1 : L'utilisateur s'est connecté au site : Par exemple entrer : pseudo: UserTest password: UserTest. Une fois connecté avec ce niveau de droit, vous avez accès aux pages précédemment bloqué, mais pas a la page admin. Notez que le bouton "Se connecter" est devenu "Se déconnecter"
> - Le niveau 2 : L'utilisateur s'est connecté et est un admin : Par exemple entrer : pseudo: Admin password: admin. Une fois connecté avec ce niveau de droit, vous avez accès a toute les pages précédante, ainsi qu'a un nouveau onglet "espaceAdmin"

> ### Onglet espaceAdmin :
> - Cette onglet est disponnible qu'au adminisatrateur
> - Il leur permet de créer, modifier, supprimer un utilisateur
> - La page est gérrer en Ajax, il n'y a donc pas besoin de recharger la page pour voir les modifications apparaitre
> - L'affichage des utilisateurs présent dans la base de données est gerré grace a une DataTable, il suffit de cliquer sur les boutons supprimer pour "bannir" un utilisateur. La colonne Edit permet d'ouvrir le formulaire de modification (Seul le droit de l'utilisateur est modifiable pour l'instant). Pour finir le bouton en dessous du DataTable permet d'ouvrir le formulaire qui ajoutera un utilisateur



