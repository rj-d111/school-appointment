<?php
// Go to db-conn file
include "../php-connect/db_conn.php";

session_start();


  // Sanitize user input
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

// Hash the password using bcrypt
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check for user in the database
$sql = "SELECT * FROM tbl_admin WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Verify password using password_verify
    if (password_verify($password, $row['password'])) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
    } else {
        header("Location: login.php?incorrect=true");
    }
} else {
    header("Location: login.php?incorrect=true");
}

    ?>