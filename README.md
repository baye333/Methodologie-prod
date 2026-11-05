# Methodologie-prod

Application web de gestion des étudiants construite avec Laravel, React et Inertia.js.

Le projet met en place une base de gestion scolaire avec authentification, tableau de bord, et CRUD des étudiants, dans une architecture moderne basée sur Laravel 13 + Vite + Tailwind.

## Stack technique

- PHP 8.3
- Laravel 13
- React 19
- Inertia.js
- Vite
- Tailwind CSS
- Laravel Fortify
- Pest / PHPUnit
- Composer + npm

## Fonctionnalités principales

- Authentification et gestion du compte utilisateur
- Tableau de bord accessible aux utilisateurs connectés
- Gestion des étudiants : ajout, consultation, modification, suppression
- Intégration entre Laravel et React via Inertia
- Interface moderne et responsive
- Vérification de l'état du projet via tests et analyse statique

## Structure du projet

```text
app/                     # Code applicatif Laravel
config/                  # Configuration Laravel
database/                # Migrations et seeders
public/                  # Point d'entrée public
resources/
  css/                   # Styles globaux
  js/                    # Frontend React / Inertia
  views/                 # Vues Blade
routes/                  # Définition des routes
tests/                   # Tests automatisés
composer.json            # Dépendances PHP
package.json             # Dépendances JavaScript et scripts
vite.config.ts          # Configuration Vite
```

## Prérequis

Avant de lancer le projet, assurez-vous d'avoir installé :

- PHP 8.3 ou plus
- Composer
- Node.js 20+ et npm
- Une base de données compatible avec Laravel (SQLite, MySQL, PostgreSQL, etc.)

## Installation

```bash
git clone <url-du-repo>
cd Methodologie-prod
composer install
cp .env.example .env
php artisan key:generate
```

Si vous utilisez SQLite :

```bash
touch database/database.sqlite
```

Puis configurez votre fichier `.env` selon votre environnement de base de données, puis exécutez :

```bash
php artisan migrate
npm install
```

## Lancer le projet

Pour démarrer l'application en mode développement :

```bash
composer run dev
```

Cette commande démarre le serveur Laravel ainsi que la compilation Vite.

Vous pouvez aussi démarrer uniquement le backend :

```bash
php artisan serve
```

Et ensuite, dans un autre terminal :

```bash
npm run dev
```

## Scripts utiles

### PHP / Laravel

```bash
php artisan test
php artisan migrate
php artisan db:seed
```

### Qualité et lint

```bash
composer test
composer lint
composer lint:check
```

### Frontend

```bash
npm run build
npm run check
npm run types:check
```

## Test

Le projet est configuré avec Pest pour les tests automatisés.

```bash
php artisan test
```

## Contribution

Les contributions sont les bienvenues. Avant de soumettre une modification :

1. Créer une branche dédiée
2. Vérifier le bon fonctionnement des tests
3. Exécuter les contrôles qualité si nécessaire
4. Ouvrir une pull request avec une description claire

## Licence

Ce projet est sous licence MIT.
