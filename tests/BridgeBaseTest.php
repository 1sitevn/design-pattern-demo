<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Bridge\Basic\Abstraction;
use OneSite\DesignPattern\Bridge\Basic\ConcreteImplementationA;
use OneSite\DesignPattern\Bridge\Basic\ConcreteImplementationB;
use OneSite\DesignPattern\Bridge\Basic\ExtendedAbstraction;
use PHPUnit\Framework\TestCase;


/**
 * Class BridgeBaseTest
 * @package OneSite\DesignPattern\Tests
 */
class BridgeBaseTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        $implementation = new ConcreteImplementationA();
        $abstraction = new Abstraction($implementation);

        $this->clientCode($abstraction);

        echo "\n";

        $implementation = new ConcreteImplementationB();
        $abstraction = new ExtendedAbstraction($implementation);

        $this->clientCode($abstraction);

        return $this->assertTrue(true);
    }

    /**
     * @param Abstraction $abstraction
     */
    function clientCode(Abstraction $abstraction)
    {
        echo $abstraction->operation();
    }
}
