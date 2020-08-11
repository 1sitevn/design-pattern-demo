<?php


namespace OneSite\DesignPattern\Decorator\Notifier;


/**
 * Interface Notification
 * @package OneSite\DesignPattern\Decorator\Notifier
 */
interface Notification
{
    /**
     * @param $to
     * @param $message
     * @return mixed
     */
    public function send($to, $message);
}
