<?php

/**
 * Class Mail
 */
class Mail
{
    /**
     * @var
     */
    private $recipient;

    /**
     * @param string $recipient
     */
    public function setClient(string $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     *
     */
    public function sendMail() : void
    {
        echo "<p>Send mail to the $this->recipient</p>";
    }
}