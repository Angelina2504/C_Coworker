# Backlog Refinement - Sous-tâches Techniques
**Source** : `backlog-ccoworker.csv`
**Objectif** : Découpage technique pour les développeurs.

---

## 🏢 Épic : Gestion des Espaces

### US-01 : Liste des espaces
*En tant qu’admin et user, je veux voir la liste des espaces*
**Sous-tâches :**
- [ ] **Back** : Créer le modèle `Space` (id, name, capacity, type, equipment).
- [ ] **Back** : Créer le contrôleur `SpaceController->index()` qui récupère tous les espaces.
- [ ] **Front** : Créer la vue `spaces/index.php`.
- [ ] **Front** : Intégrer le tableau HTML (Bootstrap) avec les colonnes : Nom, Type, Capacité.
- [ ] **Front** : Ajouter un message "Aucun espace" si la liste est vide.

### US-02 : Détail d'un espace
*En tant qu’admin et user, je veux voir le détail d'un espace*
**Sous-tâches :**
- [ ] **Back** : Créer la méthode `SpaceController->show($id)`.
- [ ] **Front** : Créer la vue `spaces/show.php`.
- [ ] **Front** : Afficher photo (placeholder), liste des équipements, capacité.
- [ ] **Front** : Ajouter un bouton "Retour à la liste".

### US-03 : Ajouter un espace (Admin uniquement)
*En tant qu’admin, je veux ajouter un espace*
**Sous-tâches :**
- [ ] **Front** : Créer le formulaire `spaces/create.php` (Nom, Capacité [number], Type [select], Équipements [checkbox]).
- [ ] **Back** : Créer la route `POST /spaces`.
- [ ] **Back** : Validation des données (Nom requis, Capacité > 0).
- [ ] **Database** : Insertion SQL `INSERT INTO spaces ...`.
- [ ] **Front** : Redirection vers la liste avec message flash "Espace créé".

### US-04 : Modifier un espace
*En tant qu’admin, je veux modifier un espace*
**Sous-tâches :**
- [ ] **Back** : Créer la méthode `SpaceController->edit($id)` (récupère les infos actuelles).
- [ ] **Front** : Créer la vue `spaces/edit.php` (formulaire pré-rempli).
- [ ] **Back** : Gérer l'`UPDATE` en base de données.

### US-05 : Supprimer un espace
*En tant qu’admin, je veux supprimer un espace*
**Sous-tâches :**
- [ ] **Back** : Vérifier s'il y a des réservations futures liées (Bloquant ou Cascade ? -> Règle : Bloquant).
- [ ] **Front** : Ajouter un bouton "Supprimer" avec une modale de confirmation JS `confirm()`.
- [ ] **Back** : Exécuter le `DELETE`.

---

## 📅 Épic : Gestion des Réservations

### US-06 : Créer une réservation
*En tant qu’admin et user, je veux créer une réservation*
**Sous-tâches :**
- [ ] **Back** : Créer le modèle `Reservation` (id, space_id, user_id, start_time, end_time).
- [ ] **Front** : Formulaire de réservation (Datepicker, Sélecteur de créneaux).
- [ ] **Back** : Contrôle de cohérence (Fin > Début, Date >= Aujourd'hui).
- [ ] **Algo** : Vérification de disponibilité (`Empêcher les conflits` - voir US-09).

### US-07 : Modifier une réservation
*En tant qu’admin et user, je veux modifier une réservation*
**Sous-tâches :**
- [ ] **Front** : Vue d'édition (changement d'horaire ou de salle).
- [ ] **Back** : Re-vérifier la disponibilité sur le nouveau créneau.

### US-08 : Supprimer une réservation
*En tant qu’admin et user, je veux supprimer une réservation*
**Sous-tâches :**
- [ ] **Front** : Bouton d'annulation sur le dashboard ou le détail.
- [ ] **Back** : Soft delete ou Hard delete ? (Décision : Hard delete pour le MVP).

### US-09 : Empêcher les conflits (Règle Métier Critique)
*Empêcher deux réservations sur un même créneau*
**Sous-tâches :**
- [ ] **Back** : Écrire une requête SQL de vérification :
  `SELECT count(*) FROM reservations WHERE space_id = ? AND start < ? AND end > ?`
- [ ] **Back** : Retourner une erreur bloquante si count > 0.
- [ ] **Front** : Afficher l'erreur "Créneau indisponible".

---

## 📊 Épic : Administration

### US-10 : Planning hebdomadaire
*En tant qu'admin, je veux voir les réservations par jour et heure*
**Sous-tâches :**
- [ ] **Back** : API ou méthode pour récupérer les réservations `WHERE start BETWEEN lundi AND dimanche`.
- [ ] **Front** : Affichage d'une grille (Table HTML ou CSS Grid).
- [ ] **Front** : Placer les blocs de réservation dans les cellules correspondantes (Lundi 10h...).

### US-11 : Tableau de bord
*En tant qu'admin, je veux voir rapidement les espaces libres et occupés*
**Sous-tâches :**
- [ ] **Back** : Requête `COUNT(spaces)` total.
- [ ] **Back** : Requête `COUNT(reservations)` en cours (NOW).
- [ ] **Front** : Vue `dashboard.php` avec des cartes (KPIs).
- [ ] **Front** : Liste des 5 prochaines réservations (`ORDER BY start ASC LIMIT 5`).

---

## 👥 Épic : Gestion des Utilisateurs

### US-13 : Créer un utilisateur (Admin)
*En tant qu’admin, je veux ajouter un utilisateur*
**Sous-tâches :**
- [ ] **Back** : Modèle `User` (firstname, lastname, email, password, role).
- [ ] **Front** : Formulaire création user (Nom, Prénom, Email, Rôle [Admin/User]).
- [ ] **Back** : Générer un mot de passe provisoire ou champ mot de passe.
- [ ] **Back** : Hachage du mot de passe `password_hash()`.
- [ ] **Database** : `INSERT INTO users`.

### US-17 : Lister les utilisateurs
*En tant qu’admin, je veux lister les utilisateurs*
**Sous-tâches :**
- [ ] **Back** : `UserController->index()` (`SELECT * FROM users`).
- [ ] **Front** : Tableau des utilisateurs (Nom, Email, Rôle).
- [ ] **Front** : Actions (Modifier, Supprimer) sur chaque ligne.

### US-14 : Modifier un utilisateur
*En tant qu’admin, je veux modifier un utilisateur*
**Sous-tâches :**
- [ ] **Front** : Formulaire d'édition pré-rempli.
- [ ] **Back** : Update SQL. Attention à ne pas hasher le mot de passe si le champ est vide.

### US-15 : Supprimer un utilisateur
*En tant qu’admin, je veux supprimer un utilisateur*
**Sous-tâches :**
- [ ] **Back** : Vérifier si l'user a des réservations futures.
- [ ] **Back** : `DELETE FROM users WHERE id = ?`.

### US-18 : Afficher le profil
*En tant qu’admin, je veux afficher le profil utilisateur*
**Sous-tâches :**
- [ ] **Front** : Page de profil simple (Infos personnelles, Liste de ses réservations passées/futures).

### US-16 : Supprimer son compte (User)
*En tant qu’user, je veux demander la suppression d'un utilisateur*
**Sous-tâches :**
- [ ] **Front** : Bouton "Supprimer mon compte" dans la page profil.
- [ ] **Back** : Confirmation (Mot de passe requis pour sécurité).
- [ ] **Back** : Suppression et Déconnexion (`session_destroy`).

### US-Auth : Authentification
**Sous-tâches :**
- [ ] **Front** : Page de Login `login.php`.
- [ ] **Back** : Vérification email/password `password_verify()`.
- [ ] **Back** : Gestion de Session (`$_SESSION['user_id']`, `$_SESSION['role']`).
- [ ] **Back** : Middleware de protection (Redirection si non connecté).
