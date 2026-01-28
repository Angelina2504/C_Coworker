# UML - Diagramme d'Activités

## Infographie

![Diagramme d'activités UML - Processus de réservation](uml_activity_diagram.png)

## Processus : Création d'une Réservation

Ce diagramme modélise le flux d'activité lorsqu'un utilisateur souhaite réserver un espace.

### Description Textuelle

**Acteurs :** Utilisateur (User ou Admin)

**Flux principal :**
1. L'utilisateur se connecte au système
2. L'utilisateur consulte la liste des espaces disponibles
3. L'utilisateur sélectionne un espace
4. L'utilisateur choisit une date et un créneau horaire
5. Le système vérifie la disponibilité (détection de conflits)
6. Si disponible : la réservation est créée et confirmée
7. Si indisponible : un message d'erreur est affiché et l'utilisateur peut modifier sa demande

**Points de décision :**
- Authentification réussie ?
- Créneau disponible ?

```mermaid
flowchart TD
    Start([Début]) --> Auth{Utilisateur<br/>authentifié ?}
    Auth -->|Non| Login[Se connecter]
    Login --> Auth
    Auth -->|Oui| ListSpaces[Consulter la liste<br/>des espaces]
    
    ListSpaces --> SelectSpace[Sélectionner<br/>un espace]
    SelectSpace --> ChooseDateTime[Choisir date<br/>et horaire]
    
    ChooseDateTime --> CheckAvailability{Vérifier<br/>disponibilité}
    
    CheckAvailability -->|Créneau libre| CreateReservation[Créer la<br/>réservation]
    CreateReservation --> Confirmation[Afficher confirmation]
    Confirmation --> End([Fin])
    
    CheckAvailability -->|Conflit détecté| ErrorMsg[Afficher message<br/>d'erreur]
    ErrorMsg --> Retry{Réessayer ?}
    Retry -->|Oui| ChooseDateTime
    Retry -->|Non| Cancel[Annuler]
    Cancel --> End
```

### Swimlanes (Couloirs)

On peut également représenter les responsabilités par acteur :

```mermaid
flowchart TD
    subgraph Utilisateur
        A1[Demander réservation]
        A2[Choisir espace]
        A3[Choisir créneau]
        A4[Voir confirmation]
    end
    
    subgraph Système
        S1[Vérifier authentification]
        S2[Afficher espaces]
        S3{Créneau disponible ?}
        S4[Enregistrer réservation]
        S5[Retourner erreur]
    end
    
    A1 --> S1
    S1 --> S2
    S2 --> A2
    A2 --> A3
    A3 --> S3
    S3 -->|Oui| S4
    S4 --> A4
    S3 -->|Non| S5
    S5 --> A1
```

---

**Règles métier illustrées :**
- Un utilisateur doit être authentifié pour réserver
- Le système empêche les doubles réservations (détection automatique des conflits)
- L'utilisateur peut réessayer avec un autre créneau en cas de conflit
