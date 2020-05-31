<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $subject = $_POST ['subject'];
    $message = $_POST ['message'];

    $email_from = "$name";
    $email_subject = " $subject";
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    $to = "mediarebound@outlook.com";
    $headers = "From: $email_from\r\n";
    $headers.= "Reply-To: $email\r\n";
    
    mail($to,$email_subject,$email_body,$headers);

?>

<!----------------------------(page redirect for testing) replace with orignal link and href back to home page!-->
 
 <script> location.replace("index.html"); </script>
 
<!---------------------------Bits of code for reuse-->
<!--// header("location:index.html");-->
<!--ob_start();-->
<!--ob_end_flush();-->
<!--//  header("location:http://www.tiptoefinancial.com/services.html");-->
 <!--if(mail($to,$email_subject,$email_body,$headers)) echo "mail sent"; else echo "not send";-->
   
<!--if(mail($to,$email_subject,$email_body,$headers)){echo "mail sent";} else { echo "not send"; }-->

<!--debugg error message contact.html
mail sent
Warning: Cannot modify header information - headers already sent by (output started at /home4/daniel/tiptoefinancial.com/forms/contact.php:27) 
in /home4/daniel/tiptoefinancial.com/forms/contact.php on line 29
+ erase duplicate code on your live server & development enviroment contact.php duplicate & contactcopy.php
--->

