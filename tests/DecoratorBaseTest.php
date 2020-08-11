<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Decorator\Base\Component;
use OneSite\DesignPattern\Decorator\Base\ConcreteComponent;
use OneSite\DesignPattern\Decorator\Base\ConcreteDecoratorA;
use OneSite\DesignPattern\Decorator\Base\ConcreteDecoratorB;
use PHPUnit\Framework\TestCase;


/**
 * Class DecoratorBaseTest
 * @package OneSite\DesignPattern\Tests
 */
class DecoratorBaseTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        $simple = new ConcreteComponent();

        echo "Client: I've got a simple component:\n";

        $this->clientCode($simple);

        echo "\n\n";

        $decorator1 = new ConcreteDecoratorA($simple);
        $decorator2 = new ConcreteDecoratorB($decorator1);

        echo "Client: Now I've got a decorated component:\n";

        $this->clientCode($decorator2);

        return $this->assertTrue(true);
    }

    /**
     * @param Component $component
     */
    private function clientCode(Component $component)
    {
        echo "RESULT: " . $component->operation();
    }

}
