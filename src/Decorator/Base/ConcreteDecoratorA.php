<?php


namespace OneSite\DesignPattern\Decorator\Base;


/**
 * Class ConcreteDecoratorA
 * @package OneSite\DesignPattern\Decorator\Base
 */
class ConcreteDecoratorA extends Decorator
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }
}
