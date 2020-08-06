<?php


namespace OneSite\DesignPattern\Adapter\Example;


/**
 * Interface Notification
 * @package OneSite\DesignPattern\Adapter\Example
 */
interface Notification
{
    /**
     * @param string $title
     * @param string $message
     * @return mixed
     */
    public function send(string $title, string $message);
}
