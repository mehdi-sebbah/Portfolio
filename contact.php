<?php require_once 'vendor/autoload.php';

// Create the Transport
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

    $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525))
      ->setUsername('0cfc70fb6875d4')
      ->setPassword('f05c1c716e9af5')
    ;
    
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    
    // Create a message
    $message = (new Swift_Message($_POST['sujet']))
      ->setFrom([$_POST['email'] => $_POST['name']])
      ->setTo(['to@example.com' => 'mehdi'])
      ->setBody($_POST['message'])
      ;
    
    // Send the message
    $result = $mailer->send($message);
    header('Location: index.php');
}
