USE pos_db;

DROP TABLE IF EXISTS customers;
DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS users;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Complete database activity', 'pending', CURDATE(), NOW()),
('Review CodeIgniter models', 'completed', CURDATE(), NOW()),
('Prepare project screenshots', 'pending', CURDATE(), NOW()),
('Submit GitHub repository', 'pending', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Check hosted application', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Write README file', 'pending', DATE_SUB(CURDATE(), INTERVAL 2 DAY), NOW()),
('Test application routes', 'completed', DATE_SUB(CURDATE(), INTERVAL 2 DAY), NOW()),
('Finalize assessment submission', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at)
VALUES ('admin', 'Claude Andre Ebnol', 'claude.ebnol@gmail.com', NOW());