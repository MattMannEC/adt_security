<?php

Class Emailer
{
    public $to = "dortwag@gmail.com";
    public $subject = "this is the subject";
    
    public function compose(Client $client)
    {
        $message = 
            $client->fullName() .
            ' ' . $client->postCode() . 
            " would like to know more about ADT Security, 
            please get in contact with them. " .
            $client->email() . 
            ' - ' . 
            $client->phoneNumber();

        // use wordwrap() if lines are longer than 70 characters
        $message = wordwrap($message,70);

        $headers = [
            'From' => $client->email(), 
            'Reply-To' => $client->email(), 
            'Content-type' => 'text/html; charset=iso-8859-1',
        ];

        $email = [
            'to' => $this->to,
            'subject' => $this->subject,
            'message' => $message,
            'headers' => $headers,
        ];

        return $email;
    }

    public function send($email)
    {
        return mail(
            $email['to'], 
            $email['subject'], 
            $email['message'], 
            $email['headers']
        );
    }
}