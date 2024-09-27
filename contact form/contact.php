<?php
if (isset($_POST['submit'])){
    $name= $_POST['name'];
    $visitor_email =$_POST['mail'];
    $message =$_POST['message'];
    
    $to = "bimibarbie@yahoo.com";
    $email_subject = "New Form Submission";
    $email_body = "User Name:" $name.".\n\n". "User Email:" $visitor_email.".\n\n". "User Message:" $message;. 
    
    $headers = "From: ".$visitor_email;
    
    mail($to, $email_subject, $email_body, $headers);
    header("Location: contact.html";)
}  
?>