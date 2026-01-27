# Guide de Collaboration GitHub - C'Coworker

Ce guide explique comment travailler efficacement à 3 personnes sur le même dépôt GitHub sans s'écraser le travail mutuellement.

## 1. Initialisation du Projet (À faire une seule fois par le Lead Dev)

1.  **Créer le dépôt** sur GitHub.
    -   Visibilité : **Public**.
    -   Ajouter un `.gitignore` (sélectionner le langage, ex: PHP, Java, Node selon techno).
    -   Ajouter un `README.md`.
2.  **Inviter les collègues** :
    -   Aller dans `Settings` > `Collaborators` > `Add people`.
3.  **Protéger la branche principale (`main`)** :
    -   Aller dans `Settings` > `Branches` > `Add rule`.
    -   Pattern : `main`.
    -   Cocher : "Require a pull request before merging".

## 2. Stratégie de Branches

Nous utiliserons une stratégie simplifiée :

-   **`main`** : Code de production, stable et testé. On ne *commit* JAMAIS directement dessus.
-   **`develop`** (optionnel mais recommandé) : Zone d'intégration des fonctionnalités avant la mise en prod.
-   **`feature/nom-de-la-feature`** : Branches de travail temporaires pour chaque ticket.

**(Convention de nommage)** : `feature/ajout-login`, `fix/correction-bouton`, `style/css-header`.

## 3. Workflow Quotidien du Développeur

### Étape 1 : Récupérer la dernière version
Avant de commencer quoi que ce soit, mettez-vous à jour !
```bash
git checkout main
git pull origin main
```

### Étape 2 : Créer une branche pour sa tâche
Ne travaillez jamais sur `main`. Créez une branche dédiée.
```bash
git checkout -b feature/ma-nouvelle-page
```

### Étape 3 : Coder et Commiter régulièrment
Faites des petits commits atomiques (une seule chose logique par commit).
```bash
git add .
git commit -m "feat: ajout du formulaire de réservation HTML"
```

### Étape 4 : Publier son travail
Envoyez votre branche sur GitHub.
```bash
git push origin feature/ma-nouvelle-page
```

### Étape 5 : Ouvrir une Pull Request (PR)
1.  Allez sur GitHub, un bouton "Compare & pull request" apparaît souvent.
2.  Sinon, allez dans l'onglet "Pull requests" > "New pull request".
3.  **Base** : `main` (ou `develop`) <- **Compare** : `feature/ma-nouvelle-page`.
4.  Mettez un titre clair et liez le ticket JIRA.
5.  Assignez un ou des **Reviewers** (vos collègues).

### Étape 6 : Code Review (Revue de code)
**Rôle du Reviewer (Collègue / Lead Dev)** :
-   Lire le code, vérifier la logique, le style et l'absence de bugs évidents.
-   Laisser des commentaires si des changements sont nécessaires ("Request changes").
-   Approuver la PR si tout est bon ("Approve").

### Étape 7 : Merge
Une fois validée, la personne qui a ouvert la PR (ou le Lead Dev) clique sur **"Squash and merge"** ou **"Merge pull request"**.
Puis, supprimez la branche distante.

## 4. Gérer les Conflits

Un conflit arrive quand deux personnes ont modifié les mêmes lignes du même fichier.

1.  GitHub vous prévient : "This branch has conflicts".
2.  **Solution locale (recommandée)** :
    ```bash
    git checkout feature/ma-branche
    git pull origin main  # Récupère ce qui a changé sur main entre temps
    # Git vous dit qu'il y a des conflits (CONFLICT)
    ```
3.  Ouvrez les fichiers concernés dans VS Code.
4.  Vous verrez des marqueurs `<<<<<<< HEAD` (votre code) et `>>>>>>> main` (le code venant de main).
5.  Choisissez quelle version garder (ou mélangez les deux intelligemment).
6.  Une fois résolu :
    ```bash
    git add fichier-resolu.php
    git commit -m "fix: résolution des conflits avec main"
    git push origin feature/ma-branche
    ```

## 5. Bonnes Pratiques

-   **Ne commitez pas de fichiers de config locale** (ex: `config.php` avec vos mots de passe DB). Utilisez le `.gitignore`.
-   **Communiquez** : "Je vais toucher au fichier User.php, attention".
-   **Testez avant de pousser** : Ne jamais envoyer un code qui fait planter l'application.
