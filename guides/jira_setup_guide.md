# Guide de Configuration JIRA (Free) - C'Coworker

Ce guide explique comment configurer JIRA Software (version gratuite) pour votre équipe de 3 personnes en mode Scrum.

## 1. Création du Compte et du Projet

1.  **Inscription** : Rendez-vous sur [atlassian.com/software/jira](https://www.atlassian.com/fr/software/jira) et créez un compte gratuit ("Get it free").
2.  **Créer un site** : Donnez un nom à votre site (ex: `ccoworker-teamXX.atlassian.net`).
3.  **Créer un projet** :
    -   Choisissez le modèle **Scrum**.
    -   Type de projet : **Team-managed** (Géré par l'équipe) -> *Plus simple pour les étudiants*.
    -   Nom : `C'Coworker`.
    -   Clé : `COWORK` (ou autre).

## 2. Configuration du Tableau (Board)

Par défaut, vous avez "To Do", "In Progress", "Done". Nous allons ajouter l'étape de validation.

1.  Allez dans les **paramètres du tableau** (ou "Configure board").
2.  Ajoutez une colonne **"In Review"** (ou "Code Review").
3.  Placez-la entre "In Progress" et "Done".

**Votre flux de travail :**
1.  `To Do` : À faire.
2.  `In Progress` : Je code dessus.
3.  `In Review` : J'ai fini de coder, j'ai ouvert une PR, j'attends la validation.
4.  `Done` : PR mergée et validée par le PO.

## 3. Remplir le Backlog

1.  Allez dans l'onglet **Backlog** (menu de gauche).
2.  Cliquez sur **"Create issue"** (en bas de la liste backlog).
3.  Copiez vos User Stories depuis votre document `product_backlog.md`.
    -   *Titre* : "Lister les espaces".
    -   *Description* : Copiez le "En tant que..." et les critères d'acceptation.
4.  **Estimer** : Cliquez sur le ticket et ajoutez les "Story Points" (1, 2, 3, 5, 8).

## 4. Lancer un Sprint

1.  Toujours dans l'onglet **Backlog**, cliquez sur **"Create Sprint"**.
2.  Glissez-déposez les tickets du Backlog vers le Sprint (ceux que vous pensez pouvoir finir en 1.5 jour).
3.  Cliquez sur **"Start Sprint"**.
    -   Durée : Personnalisée (1 ou 2 jours).
    -   Objectif du Sprint : "Réaliser le CRUD Espaces et la base Réservation".

## 5. Suivi Quotidien

-   **Active Board** : C'est ici que vous déplacez vos cartes.
-   **Burndown Chart** :
    -   Dans le menu de gauche, allez dans **Reports** (Rapports).
    -   Sélectionnez **Burndown Chart**.
    -   Ce graphique est généré automatiquement par JIRA si vous avez bien mis les Story Points et commencé/fini vos tickets. Affichez-le lors de la présentation finale !
