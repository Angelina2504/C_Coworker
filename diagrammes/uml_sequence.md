# UML - Diagramme de Séquence

## Infographie

![Diagramme de séquence UML - Création de réservation](uml_sequence_diagram.png)

## Scénario : Créer une Réservation

Ce diagramme montre les interactions entre les objets lors de la création d'une réservation.

### Acteurs et Objets

- **Utilisateur** : L'acteur qui effectue l'action
- **Interface** : L'interface utilisateur (formulaire)
- **ReservationController** : Contrôleur gérant la logique
- **Reservation (Model)** : Modèle de données
- **Database** : Base de données MySQL

### Flux d'Interactions

1. L'utilisateur remplit le formulaire de réservation
2. L'interface envoie la demande au contrôleur
3. Le contrôleur vérifie la disponibilité du créneau
4. Si disponible, la réservation est créée en base
5. Une confirmation est retournée à l'utilisateur

```mermaid
sequenceDiagram
    actor U as Utilisateur
    participant IF as Interface
    participant RC as ReservationController
    participant RM as Reservation (Model)
    participant DB as Database

    U->>IF: Remplit formulaire (espace, date, heure)
    IF->>RC: POST /reservations/create
    
    RC->>RM: checkAvailability(spaceId, start, end)
    RM->>DB: SELECT * FROM reservations WHERE...
    DB-->>RM: Résultat requête
    RM-->>RC: isAvailable: bool
    
    alt Créneau disponible
        RC->>RM: create(data)
        RM->>DB: INSERT INTO reservations...
        DB-->>RM: OK (id créé)
        RM-->>RC: Réservation créée
        RC-->>IF: Succès + message
        IF-->>U: Afficher confirmation
    else Créneau occupé
        RC-->>IF: Erreur 409 - Conflit
        IF-->>U: Afficher "Créneau indisponible"
    end
```

### Éléments UML

- **Message synchrone** : Flèche pleine `->>`
- **Message de retour** : Flèche pointillée `-->>`
- **Fragment alternatif** : `alt` / `else` (si/sinon)
- **Ligne de vie** : Barre verticale sous chaque participant
