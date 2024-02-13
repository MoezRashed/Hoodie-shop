<?php 
session_start(); 
include "connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    $username = $_POST['username'];
    $enteredPassword = $_POST['password'];

    if (empty($username) || empty($enteredPassword)) {
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE Username=?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            
            // Verify the entered password using password_verify
            if (password_verify($enteredPassword, $row['Pass'])) {
                $_SESSION['ahmedyasser'] = $row['FirstName'];
                header("Location: index.php");
                exit();
            } else {
                echo "WRONG";
                exit();
            }
        } else {
            echo "WRONG";
            exit();
        }
        
        $stmt->close();
    }
} else {
    exit();
}
?>
