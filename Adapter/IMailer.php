<?php

/**
 * Interface IMailer
 */
interface IMailer
{
    /**
     * @param array $recipients
     */
    public function sendMails(array $recipients) : void ;
}