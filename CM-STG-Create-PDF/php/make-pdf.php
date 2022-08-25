<?php 

  //require_once __DIR__ . '../vendor/autoload.php';

  require '../vendor/autoload.php';

  // Grab variables
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Create new PDF instance
  $mpdf = new \Mpdf\Mpdf();

  // Create PDF
  $data = "";

  $data .= "<h1>Your Details</h1>";

  // Add data
  $data .= "<strong>First Name</strong> " . $fname . "<br />";
  $data .= "<strong>Last Name</strong> " . $lname . "<br />";
  $data .= "<strong>Email</strong> " . $email . "<br />";
  $data .= "<strong>Phone</strong> " . $phone . "<br />";
  $data .= "<br /><strong>Message</strong><br />" . $message;

  // Write PDF
  $mpdf->WriteHTML($data);

  // Output to browser
  $mpdf->Output("My_PDF.pdf", "D");
?>