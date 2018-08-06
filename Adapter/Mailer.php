<?php
require_once 'IMailer.php';
require_once 'Mail.php';

/**
 * Class Mailer
 */
class Mailer implements IMailer
{
    /**
     * @var Mail
     */
    private $sender;

    /**
     * Mailer constructor.
     * @param Mail $sender
     */
    public function __construct(Mail $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @param array $recipients
     */
    public function sendMails(array $recipients): void
    {
        foreach ($recipients as $recipient) {
            $this->sender->setClient($recipient);
            $this->sender->sendMail();
        }
    }
}