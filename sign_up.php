<?php
session_start();
include "connect.php";

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isValidUsername($username) {
    // Customize this function based on your criteria for a valid username
    return preg_match('/^[a-zA-Z0-9_]+$/', $username);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape and sanitize user inputs
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];

    // Validate input data
    if (!isValidEmail($email)) {
        echo "Invalid email address";
        exit();
    }

    if (strlen($password) < 6) {
        echo "Password must be at least 6 characters";
        exit();
    }

    if ($password !== $password2) {
        echo "Passwords do not match";
        exit();
    }

    if (empty($firstname) || empty($lastname) || empty($username)) {
        echo "All fields are required";
        exit();
    }

    if (!isValidUsername($username)) {
        echo "Invalid username. Only letters, numbers, and underscores are allowed.";
        exit();
    }

    // Check if the username is already taken
    $checkUsernameQuery = "SELECT * FROM users WHERE Username=?";
    $checkUsernameStmt = $conn->prepare($checkUsernameQuery);
    $checkUsernameStmt->bind_param("s", $username);
    $checkUsernameStmt->execute();
    $checkUsernameResult = $checkUsernameStmt->get_result();

    if ($checkUsernameResult->num_rows > 0) {
        echo "Username already taken. Please choose a different username.";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the database using prepared statements
    $insertQuery = "INSERT INTO users (Email, Pass, FirstName, LastName, Username) VALUES (?, ?, ?, ?, ?)";
    
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sssss", $email, $hashedPassword, $firstname, $lastname, $username);

    if ($stmt->execute()) {
        // Registration successful, redirect to login page or do any additional logic
        header("Location: login.html"); // Replace with the actual login page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
