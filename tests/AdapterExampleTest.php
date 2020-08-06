<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Adapter\Base\Adaptee;
use OneSite\DesignPattern\Adapter\Base\Adapter;
use OneSite\DesignPattern\Adapter\Base\Target;
use OneSite\DesignPattern\Adapter\Example\EmailNotification;
use OneSite\DesignPattern\Adapter\Example\Notification;
use OneSite\DesignPattern\Adapter\Example\SlackApi;
use OneSite\DesignPattern\Adapter\Example\SlackNotification;
use PHPUnit\Framework\TestCase;


/**
 * Class AdapterExampleTest
 * @package OneSite\DesignPattern\Tests
 */
class AdapterExampleTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        echo "Client code is designed correctly and works with email notifications:\n";
        $notification = new EmailNotification("developers@example.com");
        $this->clientCode($notification);
        echo "\n\n";


        echo "The same client code can work with other classes via adapter:\n";
        $slackApi = new SlackApi("example.com", "XXXXXXXX");
        $notification = new SlackNotification($slackApi, "Example.com Developers");
        $this->clientCode($notification);
        return $this->assertTrue(true);
    }

    /**
     * @param Notification $notification
     */
    function clientCode(Notification $notification)
    {
        echo $notification->send("Website is down!",
            "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
            "Our website is not responding. Call admins and bring it up!");
    }

}
