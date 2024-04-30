<?php
 
 
 if(isset($_POST['Submit'])){
       
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $formcontents="From: $name \n Mobile No: $phone  \n email: $email \n message: $message";
        echo $formcontents;
        
        //mail function
        $to = "nagaraju@madworks.in,leads@madworks.in,help@karthikeyahomeinterior.com,";
        $subject = "Enquire for Karthikeya Home Interior Website";
        $mailheader = "From: $email \r\n";
        mail($to, $subject, $formcontents, $mailheader) or die("Error!");
        
        header("Location:./thank-you");
        
 }



?>