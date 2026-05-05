<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        die("Email and password are required.");
    }

    try {
        $stmt = $pdo->prepare("SELECT id, first_name, last_name, email, password, role, blood_group FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['first_name'] . ' ' . $user['last_name'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['blood_group'] = $user['blood_group'];

            header("Location: dashboard.php");
            exit();
        } else {
            die("Invalid email or password.");
        }
    } catch (PDOException $e) {
        die("Login failed: " . $e->getMessage());
    }
}
?>