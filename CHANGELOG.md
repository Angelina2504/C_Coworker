# Changelog - C'Coworker

Toutes les modifications notables apportées à ce projet seront documentées dans ce fichier.

## [Unreleased]

### Ajouté
- **Conception UML complète** : Diagrammes de Cas d'Utilisation, de Classes, de Séquence et d'Activités (Fichiers `.md` + Infographies).
- **Wireframes** : Spécification détaillée des pages et composants, Index avec images (Login, Dashboard) et ASCII art pour toutes les autres vues.
- **Conception MERISE** : Fichiers descriptifs textuels pour MCD, MLD et MPD.

## [0.2.0] - 2026-01-28 - Structure MVC

### Ajouté
- **Routeur Principal** : `app/index.php` gérant l'affichage dynamique via le paramètre `?page=`.
- **Layouts** : Fichiers `header.php` et `footer.php` utilisant Bootstrap 5.
- **Assets** : Fichiers `style.css` et `script.js` de base.
- **Page d'accueil** : Vue "Home" fonctionnelle avec bannière de bienvenue.

## [0.1.0] - 2026-01-27 - Initialisation du Projet

### Ajouté
- **Documentation Agile** : Guide de processus, guide de collaboration GitHub, Product Backlog initial.
- **Base de données** : Script SQL de création des tables (`users`, `spaces`, `reservations`).
- **Configuration** : Fichier `app/config/db.php` pour la connexion PDO.
- **Structure** : Arborescence de dossiers MVC initiale.
- **README** : Informations sur le projet, l'équipe et l'installation.
