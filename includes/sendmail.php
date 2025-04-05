<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'portfolio';

$connection = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check for DB connection error
if ($connection->connect_error) {
    echo json_encode(["errors" => ["Database connection failed: " . $connection->connect_error]]);
    exit();
}

// Collect and sanitize input
$fname = isset($_POST['first_name']) ? trim($_POST['first_name']) : '';
$lname = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$msg   = isset($_POST['comments']) ? trim($_POST['comments']) : '';

$errors = [];

// Validation
if (empty($fname)) $errors[] = "First name field is empty.";
if (empty($lname)) $errors[] = "Last name field is empty.";
if (empty($email)) $errors[] = "Email field is empty.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email address.";
if (empty($msg)) $errors[] = "Comment field is empty.";

// If errors exist, return them
if (!empty($errors)) {
    echo json_encode(["errors" => $errors]);
    exit();
}

// Prepared statement to prevent SQL injection
$stmt = $connection->prepare("INSERT INTO contact (last_name, first_name, comments, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $lname, $fname, $msg, $email);

if ($stmt->execute()) {
    echo json_encode(["message" => "Form submitted. Thank you for your interest!"]);
} else {
    echo json_encode(["errors" => ["Failed to submit form. Please try again later."]]);
}

$stmt->close();
$connection->close();
?>
