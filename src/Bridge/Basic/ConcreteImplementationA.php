<?php


namespace OneSite\DesignPattern\Bridge\Basic;


/**
 * Class ConcreteImplementationA
 * @package OneSite\DesignPattern\Bridge\Basic
 */
class ConcreteImplementationA implements Implementation
{
    /**
     * @return string
     */
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}
