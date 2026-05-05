-- Create database
CREATE DATABASE IF NOT EXISTS e_blood_bank;
USE e_blood_bank;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('donor', 'requester') NOT NULL,
    blood_group VARCHAR(5),
    phone VARCHAR(15),
    city VARCHAR(50),
    dob DATE,
    gender VARCHAR(20),
    weight INT,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert sample data (optional)
INSERT INTO users (first_name, last_name, email, password, role, blood_group, phone, city) VALUES
('John', 'Doe', 'john@example.com', '$2y$10$examplehashedpassword', 'donor', 'A+', '9876543210', 'Delhi');