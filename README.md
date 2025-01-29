CREATE TABLE admin_maintenance (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    payment_duration VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    start_date DATE DEFAULT NULL,
    end_date DATE DEFAULT NULL,
    maintenance_amount DECIMAL(10,2) DEFAULT NULL,
    total_amount DECIMAL(10,2) DEFAULT NULL
);
