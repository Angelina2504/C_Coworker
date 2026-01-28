# UML - Diagramme de Cas d'Utilisation

## Infographie

![Diagramme de cas d'utilisation UML - Fonctionnalités du système](uml_usecase_diagram.png)

## Vue d'Ensemble

Ce diagramme présente les fonctionnalités du système C'Coworker et les interactions entre les acteurs et le système.

### Acteurs

1. **Utilisateur (User)** : Employé ou membre utilisant les espaces de coworking
2. **Administrateur (Admin)** : Hérite de Utilisateur, avec des privilèges étendus

### Cas d'Utilisation

**Fonctionnalités Utilisateur :**
- S'authentifier
- Consulter les espaces disponibles
- Consulter le planning de réservation
- Réserver un espace
- Annuler sa réservation
- Gérer son profil utilisateur
- Supprimer son compte (extend de "Gérer son profil")

**Fonctionnalités Administrateur :**
- Gérer les espaces (CRUD : créer, modifier, supprimer)
- Gérer toutes les réservations
- Gérer les utilisateurs
- Consulter le tableau de bord administrateur

### Relations

- **<<include>>** : Relation de dépendance obligatoire (ex: Réserver un espace inclut S'authentifier)
- **<<extend>>** : Relation optionnelle (ex: Supprimer son compte étend Gérer son profil)
- **Héritage** : Admin hérite de User (représenté par une flèche blanche)

```mermaid
graph TB
    subgraph Système["Système C'Coworker"]
        UC1[S'authentifier]
        UC2[Consulter les espaces]
        UC3[Consulter le planning]
        UC4[Réserver un espace]
        UC5[Annuler sa réservation]
        UC6[Gérer son profil]
        UC7[Supprimer son compte]
        UC8[Gérer les espaces<br/>CRUD]
        UC9[Gérer toutes les<br/>réservations]
        UC10[Gérer les utilisateurs]
        UC11[Tableau de bord<br/>Admin]
    end
    
    User((Utilisateur))
    Admin((Administrateur))
    
    User -.-> Admin
    
    User --> UC1
    User --> UC2
    User --> UC3
    User --> UC4
    User --> UC5
    User --> UC6
    
    Admin --> UC8
    Admin --> UC9
    Admin --> UC10
    Admin --> UC11
    
    UC4 -.->|include| UC1
    UC8 -.->|include| UC1
    UC6 -.->|extend| UC7
```

### Notation

- **Ovale** : Cas d'utilisation
- **Stick figure** : Acteur
- **Ligne pleine** : Association
- **Ligne pointillée** : Relation include/extend
- **Flèche blanche** : Héritage d'acteur
