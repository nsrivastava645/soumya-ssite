<?php

if(isset($_POST["submit"])) {
    $name=$_POST['name];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    
    $mailTo="saumyavkg1500@gmail.com";
    $headers ="From: ".$name;
    $txt ="Received mail from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    
    

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}


