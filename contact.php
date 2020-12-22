<?php  require_once 'vendor/autoload.php';

if(isset($_POST['message'])){
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= 'FROM: ' . $_POST['email'] . "\n";
  $headers .= 'Content-Type:text/html; charset="uft-8"' . "\n";
  $headers .= 'Content-Transfer-Encoding: 8bit';

  $subject = $_POST['sujet'];

  $to = 'sebbah.m.dev@gmail.com';

  if(mail($to, $subject, $_POST['message'], $headers)){

      echo json_encode(["title" => "Votre message a été envoyé",
                        "message" => 'Merci '.htmlentities($_POST['name']).'.'
      ]);
    }else{
      
      echo json_encode(["title" => "Votre envoi a échoué",
                        "message" => "Ressayer"
      ]);
    }
}

/*
//GESTION MAIL VIA SWIFTMAILER

// Create the Transport
if(isset($_POST['name']) && isset($_POST['message'])){

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

    if($result){
    
      echo json_encode(["title" => "Votre message a été envoyé",
                        "message" => 'Merci '.htmlentities($_POST['name']).'.'
      ]);
    }else{
      
      echo json_encode(["title" => "Votre envoi a échoué",
                        "message" => "Ressayer"
      ]);
    }
}*/
