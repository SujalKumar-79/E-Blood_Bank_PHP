<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $role = 'donor'; // Assuming donor for now, can be extended
    $blood_group = $_POST['blood_type'];
    $phone = trim($_POST['phone']);
    $city = trim($_POST['city']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $weight = (int) $_POST['weight'];
    $address = trim($_POST['address']);

    // Basic validation
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password)) {
        die("All required fields must be filled.");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, password, role, blood_group, phone, city, dob, gender, weight, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$first_name, $last_name, $email, $hashed_password, $role, $blood_group, $phone, $city, $dob, $gender, $weight, $address]);

        // Redirect to login or dashboard
        header("Location: login.html?success=1");
        exit();
    } catch (PDOException $e) {
        die("Registration failed: " . $e->getMessage());
    }
}
?>