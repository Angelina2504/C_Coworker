# Guide du Processus Agile - Projet C'Coworker

Ce document détaille l'organisation Agile à suivre pour le projet C'Coworker, basée sur le cadre SCRUM adapté pour une équipe de 3 personnes et un sprint court (1 à 1,5 jour).

## 1. Composition de l'Équipe & Rôles

Chaque groupe (3-4 personnes) se répartit les rôles suivants :

-   **Product Owner (PO)** :
    -   Responsable de la vision du produit et du carnet de commandes (Backlog).
    -   Définit les priorités (qu'est-ce qu'on fait ?).
    -   Valide les tickets terminés (Validation fonctionnelle).
    -   Présente le produit final au "client" (professeur).
-   **Scrum Master (SM)** :
    -   Garant de la méthode et de l'organisation.
    -   Facilite les réunions (Daily Scrum).
    -   Met à jour le Burndown Chart et surveille l'avancement.
    -   Lève les blocages pour l'équipe.
-   **Développeurs** :
    -   Réalisent les fonctionnalités.
    -   Appliquent les bonnes pratiques (TDD, KISS).
    -   **Lead Developer** (rôle technique spécifique) : Organise les Code Reviews, valide les Pull Requests (PR) techniquement.

---

## 2. Le Cycle Agile en 6 Étapes

### Étape 1 : Création du Product Backlog
**Responsable** : Product Owner
-   Lister toutes les fonctionnalités attendues (User Stories) issues du cahier des charges.
-   Chaque ticket doit répondre à un besoin utilisateur clair (ex: "En tant qu'admin, je veux ajouter un espace...").
-   Les tickets sont notés dans **JIRA** (colonne "Backlog").

### Étape 2 : Backlog Refinement (Affinage)
**Participants** : Toute l'équipe
-   Le PO présente chaque ticket à l'équipe.
-   L'équipe pose des questions pour clarifier le besoin.
-   On découpe les tickets trop gros en sous- tâches plus petites.
-   On définit la "Definition of Done" (DoD) : quand considère-t-on qu'un ticket est fini ? (ex: Codé + Testé + Validé par PO).

### Étape 3 : Poker Planning (Estimation)
**Participants** : Toute l'équipe (dirigé par le PO)
-   L'équipe estime la complexité de chaque ticket (en points de complexité ou taille de T-shirt : S, M, L).
-   Utilisez une suite de Fibonacci simplifiée : 1, 2, 3, 5, 8.
-   Chaque membre vote. Si écarts, on discute et on revote.
-   **Objectif** : S'aligner sur l'effort à fournir.

### Étape 4 : Sprint Planning
**Participants** : Toute l'équipe (dirigé par le PO)
-   Le PO sélectionne les tickets à faire entrer dans le Sprint (selon la capacité de l'équipe).
-   L'équipe s'engage sur cet objectif de Sprint.
-   Les tickets passent dans la colonne "To Do" du tableau JIRA.

### Étape 5 : Exécution & Suivi (Burndown Chart)
**Responsable Suivi** : Scrum Master
-   **Daily Scrum** : Réunion quotidienne (stand-up) de 15 min max.
    -   Ce que j'ai fait hier.
    -   Ce que je fais aujourd'hui.
    -   Est-ce que j'ai un point de blocage ?
-   **Burndown Chart** : Le SM met à jour le graphique d'avancement jour après jour pour visualiser le "reste à faire".

### Étape 6 : Présentation Finale
**Responsable** : Product Owner
-   Durée : 2 minutes max.
-   Présentation au client (Professeur) :
    -   Objectif et organisation.
    -   Démonstration des fonctionnalités finies.
    -   Explication des choix et du suivi.

---

## 3. Pratiques Techniques Obligatoires

-   **Peer Programming** : Travail en binôme pour partager la connaissance.
-   **TDD (Test Driven Development)** : Écrire le test *avant* le code.
-   **KISS (Keep It Simple, Stupid)** : Aller au plus simple.
-   **Refactoring** : À chaque fin de demi-journée, prendre du temps pour nettoyer le code (renommage, simplification).
-   **Code Review** : Aucune fusion (merge) sur la branche principale sans validation par le Lead Dev ou un pair.

## 4. Outils
-   **Gestion de projet** : JIRA (Version Gratuite) pour le Kanban (Colonnes: Backlog, To Do, In Progress, In Review, Done).
-   **Code** : GitHub (Repo public).
