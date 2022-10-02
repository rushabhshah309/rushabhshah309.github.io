<?php
  $receiving_email_address = 'shahrushabh309@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $to = $receiving_email_address;
  $name = $_POST['name'];
  $email_address = $_POST['email'];
  $message = $_POST['subject'];
  
 

  $email_subject = "Contact form submission: $name";
  
  $email_body = "You have received a new message. ".
  
  " Here are the details:\n Name: $name \n ".
  
  "Email: $email_address\n Message \n $message";
  
  $headers = "From: $myemail\n";
  
  $headers .= "Reply-To: $email_address";
  
  mail($to,$email_subject,$email_body,$headers);

?>