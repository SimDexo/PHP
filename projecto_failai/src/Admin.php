<?php

class EmailClient
{
    public function sendEmail($to, $subject, $message)
    {
        $this->log("Siunčiamas laiškas į " . $to . " su tema " . $subject);
    }

    public function getInbox()
    {
        $this->log("Gaunamas laiškas");
    }
}

trait Logger
{
    public function log($message)
    {
        echo "[" . date("Y-m-d H:i:s") . "] $message/n";
    }
}

class Admin extends EmailClient
{
    use Logger;

    public function sendEmail($to, $subject, $message)
    {
        echo "[" . date("Y-m-d H:i:s") . "] $message/n";
    }

    public function getInbox()
    {
     $this->log("Gautas laiskas.");
    }
}
