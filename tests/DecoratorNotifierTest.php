<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Adapter\Example\Notification;
use OneSite\DesignPattern\Decorator\Notifier\FacebookNotifier;
use OneSite\DesignPattern\Decorator\Notifier\Notifier;
use OneSite\DesignPattern\Decorator\Notifier\SlackNotifier;
use OneSite\DesignPattern\Decorator\Notifier\SMSNotifier;
use PHPUnit\Framework\TestCase;


/**
 * Class DecoratorNotifierTest
 * @package OneSite\DesignPattern\Tests
 */
class DecoratorNotifierTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        $to = "xxx";
        $message = "Test...!";

        $basicNotifier = new Notifier();

        $smsNotifier = new SMSNotifier($basicNotifier);
        echo "\n---------";
        $smsNotifier->send($to, $message);

        $facebookNotifier = new FacebookNotifier($basicNotifier);
        echo "\n---------";
        $facebookNotifier->send($to, $message);

        $slackNotifier = new SlackNotifier($basicNotifier);
        echo "\n---------";
        $slackNotifier->send($to, $message);

        $smsFacebookNotifier = new FacebookNotifier($smsNotifier);
        echo "\n---------";
        $smsFacebookNotifier->send($to, $message);

        $smsSlackNotifier = new SlackNotifier($smsNotifier);
        echo "\n---------";
        $smsSlackNotifier->send($to, $message);

        $facebookSlackNotifier = new SlackNotifier($facebookNotifier);
        echo "\n---------";
        $facebookSlackNotifier->send($to, $message);

        $smsFacebookSlackNotifier = new SlackNotifier($smsFacebookNotifier);
        echo "\n---------";
        $smsFacebookSlackNotifier->send($to, $message);

        return $this->assertTrue(true);
    }


    /**
     * @param Notification $notification
     * @param string $to
     * @param string $message
     */
    function sendNotify(Notification $notification, string $to, string $message)
    {
        echo $notification->send($to, $message);
    }
}
