# Spécification des Wireframes - C'Coworker

Ce document décrit l'ensemble des pages, vues et composants modulaires de l'application C'Coworker.

## 1. Gabarits (Composants Modulaires)

### 1.1 Header (Navigation)
**Présent sur toutes les pages authentifiées**
- Logo "C'Coworker" (lien vers dashboard)
- Navigation principale :
  - Espaces
  - Mes Réservations (User)
  - Dashboard (User/Admin selon rôle)
  - Admin (dropdown si Admin : Gestion Espaces, Gestion Réservations, Gestion Utilisateurs)
- Zone utilisateur (droite) :
  - Icône utilisateur + Nom affiché
  - Badge rôle (Admin/User)
  - Dropdown : Mon Profil / Déconnexion

### 1.2 Footer
- Mentions légales
- Informations de contact
- Copyright © 2026 C'Coworker - Projet CDA

### 1.3 Carte Espace (Space Card)
**Composant réutilisable**
- Image de l'espace (placeholder)
- Nom de l'espace
- Type (Bureau/Réunion/Open-space)
- Capacité (icône + nombre)
- Équipements (icônes)
- Bouton "Voir détails" / "Réserver"

### 1.4 Formulaire de Recherche/Filtre
- Filtre par type
- Filtre par capacité minimale
- Recherche par nom

---

## 2. Pages Publiques

### 2.1 Page d'Accueil (Home) `/`
**Non authentifié**
- Hero section avec message de bienvenue
- Présentation de C'Coworker
- CTA "Se connecter" / "Découvrir les espaces"
- Grille de 3-4 espaces en vedette
- Footer

---

## 3. Pages d'Authentification

### 3.1 Page de Connexion (Login) `/login`
- Formulaire centré :
  - Email
  - Mot de passe
  - Bouton "Se connecter"
  - Message d'erreur si échec

---

## 4. Pages Utilisateur (User)

### 4.1 Dashboard Utilisateur `/dashboard`
**Vue après connexion User**
- Header avec profil
- Section "Mes Prochaines Réservations" (3-5 prochaines)
  - Tableau : Espace, Date, Heure, Actions (Annuler)
- Section "Espaces Disponibles Maintenant"
  - 4 cartes d'espaces libres
- Bouton "Voir tous les espaces"

### 4.2 Liste des Espaces `/spaces`
- Barre de recherche/filtres (gabarit 1.4)
- Grille de cartes d'espaces (gabarit 1.3)
- Pagination

### 4.3 Détail d'un Espace `/spaces/{id}`
- Image grande taille
- Informations :
  - Nom, Type, Capacité
  - Liste des équipements
  - Description (si disponible)
- Bouton "Réserver cet espace"
- Section "Planning de disponibilité" (calendrier simplifié)

### 4.4 Formulaire de Réservation `/reservations/create`
- Sélection de l'espace (dropdown ou pré-rempli si venant du détail)
- Sélecteur de date (datepicker)
- Heure de début (input time)
- Heure de fin (input time)
- Message d'erreur si conflit
- Bouton "Confirmer la réservation"

### 4.5 Mon Profil `/profile`
- Informations personnelles (Nom, Prénom, Email)
- Bouton "Modifier mes informations"
- Section "Mes Réservations" (historique complet)
- Bouton "Supprimer mon compte" (avec confirmation)

---

## 5. Pages Administrateur (Admin)

### 5.1 Dashboard Admin `/admin/dashboard`
**Vue Admin**
- Header avec profil Admin
- KPIs (Cartes) :
  - Nombre total d'espaces
  - Nombre de réservations du jour
  - Taux d'occupation actuel
  - Nombre d'utilisateurs actifs
- Liste des 10 prochaines réservations (tableau)
- Graphiques (optionnel MVP) : Occupation par semaine

### 5.2 Gestion des Espaces `/admin/spaces`
- Bouton "Ajouter un espace" (en haut à droite)
- Tableau des espaces :
  - Colonnes : Nom, Type, Capacité, Actions (Modifier, Supprimer)
- Pagination

### 5.3 Formulaire Espace (Créer/Modifier) `/admin/spaces/create` ou `/edit/{id}`
- Nom (input text)
- Type (select : Bureau, Réunion, Open-space)
- Capacité (input number)
- Équipements (checkboxes : Wifi, Projecteur, Tableau blanc, etc.)
- Bouton "Enregistrer"

### 5.4 Gestion des Réservations `/admin/reservations`
- Tableau de toutes les réservations :
  - Colonnes : Utilisateur, Espace, Date, Heure, Statut, Actions (Annuler)
- Filtres : Par espace, Par date, Par utilisateur
- Pagination

### 5.5 Planning Hebdomadaire `/admin/planning`
- Vue calendrier (grille Lundi-Vendredi, 8h-18h)
- Chaque case = créneau d'1h
- Blocs colorés pour les réservations
- Click sur un bloc : voir détails

### 5.6 Gestion des Utilisateurs `/admin/users`
- Bouton "Ajouter un utilisateur"
- Tableau :
  - Colonnes : Nom, Prénom, Email, Rôle, Actions (Modifier, Supprimer)
- Pagination

### 5.7 Formulaire Utilisateur (Créer/Modifier) `/admin/users/create` ou `/edit/{id}`
- Prénom, Nom, Email
- Rôle (select : User, Admin)
- Mot de passe (si création)
- Bouton "Enregistrer"

---

## 6. Récapitulatif des Pages à Wireframer

1. **Login** (page publique)
2. **Dashboard User**
3. **Dashboard Admin**
4. **Liste Espaces**
5. **Détail Espace**
6. **Formulaire Réservation**
7. **Mon Profil**
8. **Gestion Espaces Admin** (avec formulaire)
9. **Planning Hebdomadaire Admin**
