<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate password
    if (empty($password)) {
        $errors['password'] = "Password is required";
    }

    // Validate confirm password
    if (empty($confirmPassword)) {
        $errors['confirm_password'] = "Please confirm your password";
    } elseif ($password !== $confirmPassword) {
        $errors['confirm_password'] = "Passwords do not match";
    }
}

if (count($errors) === 0) {
    // Process valid data
    echo "Passwords matched!";
} else {
    // Display errors
    echo "<h3>Validation errors:</h3>";
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>
