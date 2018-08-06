<?php
require_once 'Mailer.php';

echo '<h1>Adapter</h1>';

// Create objects
$mail = new Mail();
$mailer = new Mailer($mail);

// Recipient list
$recipients = [
    'vasya@gmail.com',
    'vanya@ukr.net',
    'kolya@inbox.ua',
];

// Send messages
$mailer->sendMails($recipients);