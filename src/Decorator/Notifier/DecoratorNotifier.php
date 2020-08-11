<?php


namespace OneSite\DesignPattern\Decorator\Notifier;


/**
 * Class DecoratorNotifier
 * @package OneSite\DesignPattern\Decorator\Notifier
 */
class DecoratorNotifier extends Notifier
{

    /**
     * @var Notifier
     */
    private $notifier;

    /**
     * BasicNotifier constructor.
     * @param Notifier $notifier
     */
    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }


    /**
     * @param $to
     * @param $message
     * @return mixed|string
     */
    public function send($to, $message)
    {
        return $this->notifier->send($to, $message);
    }

}
