<?php

require_once('connect.php'); // Ensure this file sets up a PDO connection in $connect

// Gather form content
$fname = trim($_POST['first_name']);
$lname = trim($_POST['last_name']);
$email = trim($_POST['email']);
$msg   = trim($_POST['comments']);

$errors = [];

// Validate inputs
if (empty($lname)) {
    $errors['last_name'] = 'Last Name cannot be empty';
}

if (empty($fname)) {
    $errors['first_name'] = 'First Name cannot be empty';
}

if (empty($msg)) {
    $errors['comments'] = 'Comment field cannot be empty';
}

if (empty($email)) {
    $errors['email'] = 'You must provide an email';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a valid email';
}

// If no errors, insert data using PDO
if (empty($errors)) {
    try {
        $query = "INSERT INTO contact (first_name, last_name, email, comments) 
                  VALUES (:fname, :lname, :email, :msg)";
        
        $stmt = $connect->prepare($query);
        $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
        $stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            // Email sending
            $to = 'sainiparam947@gmail.com';
            $subject = 'Message from your Portfolio site!';
            $message = "You have received a new contact form submission:\n\n";
            $message .= "Name: $fname $lname\n";
            $message .= "Email: $email\n";
            $message .= "Message: $msg\n";

            mail($to, $subject, $message);

            // Redirect after successful form submission
            header('Location: ../contact.php');
            exit;
        }
    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
    }
} else {
    // Display errors
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
}

?>
