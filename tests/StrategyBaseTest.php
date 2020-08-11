<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Strategy\Basic\ConcreteStrategyA;
use OneSite\DesignPattern\Strategy\Basic\ConcreteStrategyB;
use OneSite\DesignPattern\Strategy\Basic\Context;
use PHPUnit\Framework\TestCase;


/**
 * Class StrategyBaseTest
 * @package OneSite\DesignPattern\Tests
 */
class StrategyBaseTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        $context = new Context(new ConcreteStrategyA());
        echo "Client: Strategy is set to normal sorting.\n";
        $context->doSomeBusinessLogic();

        echo "\n";

        echo "Client: Strategy is set to reverse sorting.\n";
        $context->setStrategy(new ConcreteStrategyB());
        $context->doSomeBusinessLogic();

        return $this->assertTrue(true);
    }

}
