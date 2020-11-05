<?php
    

   $name = $_POST['email'];
   $visitor_email = $_POST['email'];
   $message = $_POST['mesage'];




   $email_form = 'felixwanyoike9@gmail.com';
   $email_subject = 'New form submission'; 
   $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email. \n".
                         "User Message: $message.\n";

    $to = "felixwanyoike9@gmail.com"
    $headers = "From: &email_form\r\n";

    $hearders  .="Reply-To:visitor_email \r\n ";

    mail ($to,$email_subject,$email_body,$hearders);

    header ("Loction: index.html");                    


?>
