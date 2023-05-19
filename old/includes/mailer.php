<?php
require('../vendor/autoload.php');

function mailling($subject, $body){
$hostname = 'smtp.cloudmta.net';
$username = '7c3c506dea731b2f';
$password = 'Mh812rKx4TQCm6XNTjmpGkGB';

$transport = (new Swift_SmtpTransport($hostname, 2525, 'tls'))
  ->setUsername($username)
  ->setPassword($password);

$mailer = new Swift_Mailer($transport);


$message = (new Swift_Message())
  ->setSubject($subject)
  ->setFrom(['info@writtela.com' => 'New Form Submission'])
  ->setTo(['info@snapshottoursandsafaris.com']);

$headers = ($message->getHeaders())
  -> addTextHeader('X-CloudMTA-Class', 'standard');

$message->setBody(
  ''
);
$message->addPart($body, 'text/html');
$mailer->send($message);
}
?>