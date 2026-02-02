---
description: Workflow de développement avec Git et Gitmoji
---
Ce workflow d'écrit la procédure standard pour développer une fonctionnalité sur le projet C'Coworker.

### 1. Sélection de la tâche
Identifier la tâche dans le sprint courant (Sprint 4).
Format des clés ticket : `MA2-XX` (ex: `MA2-18`).

### 2. Création de branche
Créer une branche spécifique pour la tâche.
Format : `[CLE_TICKET]-[descriptionCamelCase]`
Exemple : `MA2-18-dashboardAdmin`

```bash
git checkout -b MA2-18-dashboardAdmin
```

### 3. Développement
Implémenter la fonctionnalité demandée.

### 4. Commit avec Gitmoji
Utiliser la convention Gitmoji pour les messages de commit.
Format : `[EMOJI] [CLE_TICKET] [Message description]`
Emojis courants :
- ✨ (`:sparkles:`) : Nouvelle fonctionnalité
- 🐛 (`:bug:`) : Correction de bug
- ♻️ (`:recycle:`) : Refactoring
- 🎨 (`:art:`) : Amélioration de structure / format du code
- 📝 (`:memo:`) : Documentation

Exemple :
`git commit -m ":sparkles: MA2-18 Implement admin dashboard with stats"`

### 5. Push et Pull Request
Pousser la branche sur le dépôt distant.
```bash
git push origin MA2-18-dashboardAdmin
```
Demander à l'utilisateur de créer la Pull Request sur GitHub/Jira avec :
- Titre : `MA2-18 [Titre du ticket]`
- Description : Détails des changements.

### 6. Synchronisation
Une fois mergé (simulé ici), revenir sur main et pull.
