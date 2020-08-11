<?php


namespace OneSite\DesignPattern\Bridge\Basic;


/**
 * Class ConcreteImplementationB
 * @package OneSite\DesignPattern\Bridge\Basic
 */
class ConcreteImplementationB implements Implementation
{
    /**
     * @return string
     */
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}
