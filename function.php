<?php
include "php-connect/db_conn.php";

// Get values from the form
$appointmentType = $_POST["appointmentType"];
$purposeVisit = $_POST["visit"];
$date = date('Y-m-d', strtotime($_POST["selectedDate"]));
$time = $_POST["timeradio"];
$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$email = $_POST["email"];
$phoneNum = $_POST["phone"];
$address = $_POST["address"];
$notes = $_POST["notes"];
$studNo = isset($_POST["stud_no"]) ? $_POST["stud_no"] : null;

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO `tbl_appointment` (`appointment_type`, `purpose_visit`, `date`, `time`, `first_name`, `last_name`, `email`, `phone_num`, `address`, `notes`, `stud_no`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssss", $appointmentType, $purposeVisit, $date, $time, $firstName, $lastName, $email, $phoneNum, $address, $notes, $studNo);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Appointment successfully scheduled!";
    header("location: success.php");
} else {
    echo "Error inserting data: " . $stmt->error;
    header("location: visitor.php");
}

// Close statement and connection
$stmt->close();
$conn->close();
