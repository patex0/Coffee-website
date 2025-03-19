<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $conn->real_escape_string($_POST['name']); 
    $email = $conn->real_escape_string($_POST['email']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $subject = $conn->real_escape_string($_POST['subject']); 
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO users (name, email, contact, subject, message) VALUES('$name', '$email', '$contact', '$subject', '$message')"; 
    if($conn->query($sql)=== TRUE){
        echo "Record inserted successfully";
    } else { 
        echo"Error:". $sql."<br>".$conn->error;
    }

} else{
    echo"form is no submitted.";
}

?>