<?php


namespace OneSite\DesignPattern\Decorator\Notifier;


/**
 * Class Notifier
 * @package OneSite\DesignPattern\Decorator\Notifier
 */
class Notifier implements Notification
{
    /**
     * @param $to
     * @param $message
     * @return mixed|string
     */
    public function send($to, $message)
    {
        echo "\nSend notification to " . $to;
    }

}
