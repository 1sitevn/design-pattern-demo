<?php


namespace OneSite\DesignPattern\Decorator\Base;


/**
 * Class ConcreteDecoratorB
 * @package OneSite\DesignPattern\Decorator\Base
 */
class ConcreteDecoratorB extends Decorator
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}
