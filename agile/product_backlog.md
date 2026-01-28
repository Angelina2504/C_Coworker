# Product Backlog - C'Coworker

Ce backlog recense les fonctionnalités à développer pour le MVP (Minimum Viable Product).
Les estimations (Points) sont données à titre indicatif et doivent être revalidées par l'équipe lors du Poker Planning.

**Légende Priorité** : P1 (Critique/Bloquant) > P2 (Important) > P3 (Confort/Optionnel).

---

## 🚀 Épic 1 : Gestion des Espaces (CRUD)
*En tant qu'administrateur, je veux gérer le parc de salles pour qu'elles puissent être réservées.*

| ID | User Story (En tant que... je veux... afin de...) | Critères d'Acceptation (DoD) | Priorité | Estim. (Pts) |
|----|---------------------------------------------------|------------------------------|----------|--------------|
| **US-01** | **Lister les espaces** <br> En tant qu'admin, je veux voir la liste de tous les espaces existants. | - Affichage sous forme de tableau ou cartes<br>- Affiche Nom, Capacité, Type (Bureau/Salle/OpenSpace)<br>- Pagination si > 20 espaces | **P1** | 2 |
| **US-02** | **Ajouter un espace** <br> En tant qu'admin, je veux créer un nouvel espace dans le système. | - Formulaire avec : Nom, Capacité, Type<br>- Validation (tous champs requis)<br>- Confirmation visuelle après ajout | **P1** | 3 |
| **US-03** | **Modifier un espace** <br> En tant qu'admin, je veux mettre à jour les infos d'un espace (ex: capacité change). | - Pré-remplissage du formulaire avec infos actuelles<br>- Sauvegarde des modifs en base | **P2** | 2 |
| **US-04** | **Supprimer un espace** <br> En tant qu'admin, je veux retirer un espace qui n'est plus disponible. | - Bouton supprimer<br>- **Confirmation** (popup) avant suppression réelle<br>- Impossible de supprimer si réservations futures existent (Règle métier) | **P2** | 3 |

---

## 📅 Épic 2 : Gestion des Réservations
*En tant qu'administrateur, je veux gérer le planning d'occupation des espaces.*

| ID | User Story | Critères d'Acceptation (DoD) | Priorité | Estim. (Pts) |
|----|------------|------------------------------|----------|--------------|
| **US-05** | **Créer une réservation** <br> En tant qu'admin, je veux réserver un espace pour un utilisateur donné à une date précise. | - Formulaire : Espace, Date, Heure Début, Heure Fin, Nom Utilisateur<br>- **Bloquant** : Impossible de créer si créneau déjà pris (conflit)<br>- Heure fin > Heure début | **P1** | 5 |
| **US-06** | **Détéction des conflits** (Logique métier) <br> Le système doit interdire les doublons. | - Backend check : `WHERE space_id = X AND (start < new_end AND end > new_start)`<br>- Message d'erreur clair "Espace indisponible ce créneau" | **P1** | 5 |
| **US-07** | **Planning Hebdomadaire** <br> En tant qu'admin, je veux visualiser l'occupation des salles sur la semaine. | - Vue calendrier ou liste par jour<br>- Code couleur simple (Vert=Libre, Rouge=Occupé) | **P2** | 8 |
| **US-08** | **Annuler une réservation** <br> En tant qu'admin, je veux supprimer une réservation erreur ou annulée. | - Libère le créneau immédiatement | **P2** | 1 |

---

## 👥 Épic 3 : Gestion des Utilisateurs (Admin)
*En tant qu'administrateur, je veux avoir une base de personnes pouvant réserver.*

| ID | User Story | Critères d'Acceptation | Priorité | Estim. (Pts) |
|----|------------|------------------------|----------|--------------|
| **US-09** | **Lister les utilisateurs** <br> Voir la liste du personnel/clients. | - Nom, Prénom, Email/Role | **P2** | 2 |
| **US-10** | **Ajouter un utilisateur** <br> Créer un profil simple. | - Nom, Prénom | **P2** | 2 |

---

## 📊 Épic 4 : Dashboard & Interface
*En tant qu'administrateur, je veux une vue d'ensemble rapide.*

| ID | User Story | Critères d'Acceptation | Priorité | Estim. (Pts) |
|----|------------|------------------------|----------|--------------|
| **US-11** | **Tableau de bord (Accueil)** <br> Vue synthétique à la connexion. | - Indicateur : Nombre d'espaces libres maintenant<br>- Liste des 5 prochaines réservations | **P3** | 3 |
| **US-12** | **Navigation Responsive** <br> Interface utilisable sur tablette. | - Menu clair<br>- Boutons assez gros pour le tactile | **P3** | 5 |
