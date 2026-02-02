<?php
/**
 * Contrôleur Dashboard
 * Gestion du tableau de bord administrateur
 */

require_once 'models/User.php';
require_once 'models/Space.php';
require_once 'models/Reservation.php';

class DashboardController
{
    /**
     * Action : Afficher le tableau de bord
     * Route : ?page=dashboard
     */
    public function index()
    {
        // Restriction : Admin seulement
        AuthHelper::requireAdmin();

        // Récupération des statistiques
        $stats = [
            'users_count' => User::countAll(),
            'spaces_count' => Space::countAll(),
            'active_reservations' => Reservation::countActive()
        ];

        // Inclusion de la vue
        require_once __DIR__ . '/../views/dashboard/index.php';
    }
}
