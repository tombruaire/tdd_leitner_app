# Test Driven-Development

## Projet
Leitner System Flashcard Application

## Technologie utilisée
<a href="https://symfony.com/doc">Symfony</a>

## Prérequis
<ul>
    <li>IDE (Environnement de développement)</li>
    <li><a href="https://nodejs.org/fr">Node.js</a></li>
    <li><a href="https://www.php.net/">PHP</a></li>
    <li><a href="https://getcomposer.org/">Composer</a></li>
    <li><a href="https://www.postgresql.org/">PostgreSQL</a></li>
    <li><a href="https://www.pgadmin.org/">pgAdmin</a></li>
    <li><a href="https://git-scm.com/">Git</a></li>
</ul>

## Setup
### 1. Cloner le projet
```
git clone https://github.com/tombruaire/tdd_leitner_app.git
```
```
cd tdd_leitner_app
```

### 2. Installer les dépendances
```
composer install
```
```
npm install
```

### 3. Initialiser la base de données
```
php bin/console doctrine:database:create
```
```
php bin/console doctrine:migrations:migrate
```

### 4. Lancer l'application
```
symfony console serv:start
```
<p>Se rendre sur <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a></p>