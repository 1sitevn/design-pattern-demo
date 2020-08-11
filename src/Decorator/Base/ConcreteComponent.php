<?php


namespace OneSite\DesignPattern\Decorator\Base;


/**
 * Class ConcreteComponent
 * @package OneSite\DesignPattern\Decorator\Base
 */
class ConcreteComponent implements Component
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}
