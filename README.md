Themosis Playground
==================

Ce package permet un démarrage rapide de Themosis 2.0 avec un docker configuré pour un développement en local.

[Doc officielle themosis](https://framework.themosis.com/docs/2.0)

## Prérequis
- Docker & Docker Compose installés

## Installation

```shell
cp .env.sample .env
docker-compose build
docker-compose up

# installation des dépendances
docker-compose exec webserver composer install
docker-compose exec webserver npm install

# création du thème
docker-compose exec webserver php console theme:install playground  

docker-compose exec webserver php console key:generate
```

Pour palier a un problème de droit, à la racine de votre projet faites 
```shell
sudo chmod 777 -R .
```
**Ce n'est pas beau!** _À ne pas reproduire sur un environnement de prod_

Votre site est accessible à l'addresse [localhost](http://localhost)

## Fonctions utiles

Installer les dépendances js de votre thème
```shell
docker-compose exec webserver npm install -C /htdocs/content/themes
```

