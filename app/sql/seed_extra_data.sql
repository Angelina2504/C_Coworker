-- Ajout de 2 nouveaux utilisateurs (Mot de passe : user123)
INSERT INTO users (firstname, lastname, email, password, role, created_at) VALUES 
('Alice', 'Durand', 'alice.durand@example.com', '$2y$12$OXFrAHN8.r2IPfMt0JjYbOPVGmZYZBCi6GbFMC83GLo2Mq.tnc2Tq', 'user', NOW()),
('Bob', 'Martin', 'bob.martin@example.com', '$2y$12$OXFrAHN8.r2IPfMt0JjYbOPVGmZYZBCi6GbFMC83GLo2Mq.tnc2Tq', 'user', NOW());

-- On suppose que les espaces ID 1, 2, 3 existent
-- On récupère les IDs des utilisateurs (on suppose 1:admin, 2:jean, 3:alice, 4:bob)

-- Séries de réservations pour remplir le planning (Février et Mars 2026)
INSERT INTO reservations (space_id, user_id, start_time, end_time, created_at) VALUES 
-- Alice
(1, 3, '2026-02-10 09:00:00', '2026-02-10 12:00:00', NOW()),
(2, 3, '2026-02-12 14:00:00', '2026-02-12 18:00:00', NOW()),
(1, 3, '2026-02-15 09:00:00', '2026-02-17 17:00:00', NOW()),
(3, 3, '2026-03-02 08:30:00', '2026-03-02 12:30:00', NOW()),
(2, 3, '2026-03-05 10:00:00', '2026-03-05 16:00:00', NOW()),

-- Bob
(2, 4, '2026-02-11 09:00:00', '2026-02-11 11:00:00', NOW()),
(1, 4, '2026-02-13 13:00:00', '2026-02-13 15:00:00', NOW()),
(3, 4, '2026-02-18 09:00:00', '2026-02-20 18:00:00', NOW()),
(1, 4, '2026-03-03 14:00:00', '2026-03-03 17:00:00', NOW()),
(2, 4, '2026-03-10 09:00:00', '2026-03-12 18:00:00', NOW()),

-- Jean
(1, 2, '2026-02-22 09:00:00', '2026-02-22 13:00:00', NOW()),
(3, 2, '2026-02-25 10:00:00', '2026-02-25 12:00:00', NOW()),
(2, 2, '2026-03-15 09:00:00', '2026-03-15 18:00:00', NOW()),
(1, 2, '2026-03-20 08:00:00', '2026-03-22 12:00:00', NOW()),

-- Admin
(3, 1, '2026-02-28 09:00:00', '2026-02-28 17:00:00', NOW()),
(1, 1, '2026-03-08 09:30:00', '2026-03-08 11:30:00', NOW()),
(2, 1, '2026-03-25 14:00:00', '2026-03-25 16:00:00', NOW()),
(3, 1, '2026-03-28 09:00:00', '2026-03-30 18:00:00', NOW()),
(1, 1, '2026-04-01 10:00:00', '2026-04-01 12:00:00', NOW()),
(2, 1, '2026-04-05 09:00:00', '2026-04-05 18:00:00', NOW());
