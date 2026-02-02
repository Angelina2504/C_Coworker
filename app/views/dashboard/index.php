<div class="container mt-4">
    <div class="mb-4">
        <h2>
            <i class="bi bi-speedometer2"></i> Tableau de bord
        </h2>
        <p class="text-muted">Bienvenue sur l'espace d'administration de C'Coworker.</p>
    </div>

    <!-- Cartes de statistiques -->
    <div class="row mb-4">
        <!-- Espaces -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 shadow">
                <div class="card-header">Espaces</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">
                                <?php echo $stats['spaces_count']; ?>
                            </h5>
                            <p class="card-text">Espaces gérés</p>
                        </div>
                        <i class="bi bi-building fs-1 opacity-50"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <a href="index.php?page=spaces" class="text-white text-decoration-none">
                        Gérer les espaces <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Réservations Actives -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 shadow">
                <div class="card-header">Réservations</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">
                                <?php echo $stats['active_reservations']; ?>
                            </h5>
                            <p class="card-text">Réservations actives</p>
                        </div>
                        <i class="bi bi-calendar-check fs-1 opacity-50"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <a href="index.php?page=reservations" class="text-white text-decoration-none">
                        Voir le planning <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Utilisateurs -->
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3 shadow">
                <div class="card-header">Utilisateurs</div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title display-4">
                                <?php echo $stats['users_count']; ?>
                            </h5>
                            <p class="card-text">Utilisateurs inscrits</p>
                        </div>
                        <i class="bi bi-people fs-1 opacity-50"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <!-- Lien vers la gestion utilisateurs (Sprint 4 - À venir) -->
                    <span class="text-white-50">Gestion à venir...</span>
                </div>
            </div>
        </div>
    </div>
</div>