# snowTricks
projet 6 openClassrooms

## Présentation du projet

L'objectif du projet est de créer une application web répondant aux besoins de Jimmy. J'ai du implémenter les fonctionnalités suivantes: 
   - Un annuaire des figures de snowboard en intégrant 10 figures, le reste sera saisi par les internautes.
   - Une gestion des figures (création, modification, consultation, suppresion).
   - Un espace de discussion commun à toutes les figures.

Pour implémenter ces fonctionnalités, j'ai créé les pages suivantes :
    - la page d’accueil où figurera la liste des figures ; 
    - la page de création d'une nouvelle figure ;
    - la page de modification d'une figure ;
    - la page de présentation d’une figure (contenant l’espace de discussion commun autour d’une figure).

## Initialisation du projet

### Création de la base de donnée
```shell
mysql -u [user] -p -e "CREATE DATABASE snowtricks;"
```
### Installation des dépendances
```shell
composer install
```

### Création des tables
```shell
symfony console doctrime:schema:update
```

### Ajout de donnée
```shell
mysql -u root snowtricks -p < sql/addData.sql
```


## Configuration du projet
Pour configurer le projet il suffit de copier le fichier ".env.exemple" qui se trouve a la racine du projet. 
Puis de venir compléter les informations à l'intérieur par vos informations et de renomer le fichier en ".env.dev.local".

## Lancement du serveur en local
```shell
symfony serve:start
```
Puis aller sur l'url donné dans le terminal

Connectez-vous maintenant sur l'adress htpp://localhost:8000 via un navigateur