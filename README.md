# Etapes d'installation du projet Jobeet en local :

* Télécharger le projet via git ou décompresser le projet dans un serveur web à l'emplacement des projets.

*. Dans un cmd, se placer à la racine du projet et lancer la commande
    'composer update'

*. L'accès à la base de données se fait par défaut avec les accès suivants : *"root"* et *pas de mot de passe*
Il est possible de modifier ces valeurs dans le fichier app\config\parameters.yml

*. Toujours à la racine du projet, lancer les commandes suivantes:
    * 'php app/console doctrine:database:create'
    * 'php app/console doctrine:schema:create'
    * 'php app/console doctrine:fixtures:load'
    * 'php app/console ens:manon:users admin admin'

# Accès au projet

**Deux possibilités** :
1. Lancer le serveur web et accéder au projet via l'url [http://jobeet.local/](http://jobeet.local/)
ou
2. lancer le serveur avec la commande
    'php app/console server:run'
et accéder au projet via l'url [http://127.0.0.1:8000/](http://127.0.0.1:8000/) par défaut.

L'administration est disponible sur l'adresse [http://jobeet.local/admin](http://jobeet.local/admin) ou [http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)
Et les identifiants de base sont ceux définis dans la dernière commande plus haut *admin* et mot de passe *admin*