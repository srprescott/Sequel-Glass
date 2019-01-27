<?php

if(isset($_POST['submit'])) {
    $nameFirst = $_POST['first'];
    $nameLast = $_POST['last'];
    $phone = $_POST['phone'];
    $mailFrom = $_POST['mail'];
    $company = $_POST['company'];
    $subject = $_POST['subject'];
    $state = $_POST['state'];
    $construction = $_POST['construction'];
    $help = $_POST['help'];
    
    
    
    $mailTo = "sara@buyyak.com";
    $headers = "Website Help Request From: ".$mailFrom;
    $txt = "You have received an email from ".$nameFirst." ".$nameLast.".\n\n Email: ".$mailFrom."\n\n Phone: ".$phone."\n\n Company: ".$company."\n\n State: ".$state."\n\n Type: ".$construction."\n\n Requests: ".$subject;
        
        
        
        
        
  
    
    mail($mailTo, $subject, $txt, $headers);
    
    header("Location: index.html?mailsend");
}

?>