<?php


namespace OneSite\DesignPattern\Decorator\Notifier;


/**
 * Class SMSNotifier
 * @package OneSite\DesignPattern\Decorator\Notifier
 */
class SMSNotifier extends DecoratorNotifier
{
    /**
     * @param $to
     * @param $message
     * @return mixed|string
     */
    public function send($to, $message)
    {
        parent::send($to, $message);

        echo "\nSend notification with SMS";
    }

}
