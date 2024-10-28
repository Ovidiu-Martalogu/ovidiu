INSERT INTO users (name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES
('John Doe', 'john@example.com', NOW(), '$2y$10$SKPDNA8d0OIj5A5rj8rVV.yvlPPvKz/RHhsFQZ.k8Lw8Tqtr4nbtK', NULL, NOW(), NOW()),
('Jane Smith', 'jane@example.com', NOW(), '$2y$10$SKPDNA8d0OIj5A5rj8rVV.yvlPPvKz/RHhsFQZ.k8Lw8Tqtr4nbtK', NULL, NOW(), NOW()),
('Alice Johnson', 'alice@example.com', NOW(), '$2y$10$SKPDNA8d0OIj5A5rj8rVV.yvlPPvKz/RHhsFQZ.k8Lw8Tqtr4nbtK', NULL, NOW(), NOW()),
('Bob Brown', 'bob@example.com', NOW(), '$2y$10$SKPDNA8d0OIj5A5rj8rVV.yvlPPvKz/RHhsFQZ.k8Lw8Tqtr4nbtK', NULL, NOW(), NOW());

-- The password is hashed for "password" using bcrypt
