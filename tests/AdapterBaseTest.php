<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Adapter\Base\Adaptee;
use OneSite\DesignPattern\Adapter\Base\Adapter;
use OneSite\DesignPattern\Adapter\Base\Target;
use PHPUnit\Framework\TestCase;


/**
 * Class AdapterBaseTest
 * @package OneSite\DesignPattern\Tests
 */
class AdapterBaseTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        echo "Client: I can work just fine with the Target objects:\n";
        $target = new Target();
        $this->clientCode($target);
        echo "\n\n";

        $adaptee = new Adaptee();
        echo "Client: The Adaptee class has a weird interface. See, I don't understand it:\n";
        echo "Adaptee: " . $adaptee->specificRequest();
        echo "\n\n";

        echo "Client: But I can work with it via the Adapter:\n";
        $adapter = new Adapter($adaptee);
        $this->clientCode($adapter);

        return $this->assertTrue(true);
    }

    /**
     * @param Target $target
     */
    private function clientCode(Target $target)
    {
        echo $target->request();
    }

}
