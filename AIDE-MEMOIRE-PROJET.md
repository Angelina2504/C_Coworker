# RÉSUMÉ DE PASSATION - PROJET C'COWORKER

Ce document est destiné à une IA assistant pour reprendre le projet C'Coworker sans accès direct au système de fichiers.

## 1. Contexte du Projet
- **Nom** : C'Coworker
- **Objectif** : Application de gestion de réservation d'espaces de coworking (Bureaux, Salles de réunion).
- **Contexte** : Formation CDA 2025-2026.
- **Équipe** : GeoffroySTREIT (Lead), Guylène, Angelina.
- **Stack Technique** : PHP 8, MySQL, Bootstrap 5, Architecture MVC simplifiée.

## 2. État Actuel de l'Implémentation (Étape 2 terminée)
- **Base de données** : Tables `users`, `spaces`, `reservations` créées. Connexion PDO configurée dans `app/config/db.php`.
- **Routeur** : `app/index.php` est le point d'entrée unique. Il gère `?page=home|spaces|login`.
- **Layouts** : Header (Navbar Bootstrap) et Footer globaux inclus dans le routeur.

## 3. Conception Réalisée
- **Agile** : Backlog produit avec User Stories, guide de sprint et de collaboration.
- **MERISE** : MCD/MLD/MPD traduits en descriptions textuelles et Mermaid.
- **UML** :
    - Use Case : Utilisateur vs Admin (CRUD espaces/réservations).
    - Classe : Entités User, Space, Reservation et leurs méthodes.
    - Séquence : Workflow de réservation (Vérification disponibilité -> Insert).
    - Activité : Flux de réservation avec point de décision sur conflits.
- **Wireframes** : Spécifications de toutes les pages (Dashboard, Planning, CRUD).

## 4. Backlog Prioritaire (Prochaines Étapes)
1. **Étape 3 : Système d'Authentification (Back-end)**
   - Créer le `UserController` et le modèle `User`.
   - Gérer le `password_hash` et `password_verify`.
   - Démarrer la session PHP et stocker les infos utilisateur.
2. **Étape 4 : Système d'Authentification (Front-end)**
   - Créer la vue `login.php`.
   - Afficher les messages d'erreur et gérer la redirection après succès.

## 5. Structure de la Base de Données (MPD)
- `users` : id, firstname, lastname, email, password, role ('admin'|'user').
- `spaces` : id, name, capacity, type ('bureau'|'reunion'|'open-space'), equipment.
- `reservations` : id, user_id, space_id, start_time, end_time.

## 6. Guide pour continuer
> Cher collègue IA, pour continuer, commence par demander à l'utilisateur d'implémenter l'**Étape 3** du plan de développement : le contrôleur d'authentification. Utilise la structure MVC déjà en place dans `app/index.php`.
