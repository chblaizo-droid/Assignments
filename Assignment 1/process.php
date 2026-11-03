<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['firstName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $country = $_POST['country'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];
    $degree = isset($_POST['degree']) ? implode(", ", $_POST['degree']) : "";
    $sql = "INSERT INTO applications (firstName, email, subject, country, comment, gender, degree)
     VALUES (?, ?, ?, ?, ?, ?, ?)";
   $stmt = $conn->prepare($sql);
   $stmt ->bind_param("sssssss",$firstname,$email,$subject,$country,$comment,$gender,$degree);
   if ($stmt->execute()){
         echo "Application submitted successfully";
   } else {
       echo "Error submitting application";
   }
   $stmt -> close();
   $conn -> close();
}