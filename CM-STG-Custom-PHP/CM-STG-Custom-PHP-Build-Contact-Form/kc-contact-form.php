<?php 

if (isset($_POST['emailSubmit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailFrom = $_POST['emailFrom'];
    $emailSubject = $_POST['emailSubject'];
    $emailMessage = $_POST['emailMessage'];

    $emailTo = "ron@creatiquemedia.com";
    $emailHeaders = "From: ".$emailFrom;
    $emailNotification = "You received an e-mail from ".$fname.".\n\n".$emailMessage;
    
    mail($emailTo, $emailSubject, $emailNotification, $emailHeaders);
    header("Location: index.php?mailsend");
}