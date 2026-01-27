# Structure du Projet C'Coworker

Architecture de fichiers proposée (Pattern MVC simplifié) :

```text
/app
├── /assets          # Fichiers statiques
│   ├── /css         # Feuilles de style (style.css)
│   ├── /js          # Scripts JS (script.js)
│   └── /img         # Images du site
│
├── /config          # Configuration
│   └── db.php       # Connexion Base de Données (Ignoré par Git)
│
├── /controllers     # Logique métier (PHP)
│   ├── SpaceController.php
│   └── ReservationController.php
│
├── /models          # Accès aux données (Requêtes SQL)
│   ├── Space.php
│   └── Reservation.php
│
├── /views           # Vues (HTML/PHP)
│   ├── /layouts     # Gabarits (header.php, footer.php)
│   ├── /spaces      # Vues gestion espaces
│   ├── /reservations # Vues gestion réservations
│   └── dashboard.php
│
├── /sql             # Scripts SQL
│   └── database.sql # Création de la BDD
│
├── index.php        # Point d'entrée (Routeur ou Accueil)
├── .gitignore       # Fichiers à ignorer
└── README.md        # Présentation
```
