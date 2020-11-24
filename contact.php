<?php 
    require_once 'vendor/autoload.php';
if(!empty($_POST)){

  // Create the Transport
  $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
  ->setUsername('7c00525ca43dc4')
  ->setPassword('55f1bf1359fdbc')
  ;
  
  // Create the Mailer using your created Transport
  $mailer = new Swift_Mailer($transport);
  
  // Create a message
  $message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['john@doe.com' => 'John Doe'])
  ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
  ->setBody('Here is the message itself')
  ;
  
  // Send the message
  $result = $mailer->send($message); 
}
  
  ?>

