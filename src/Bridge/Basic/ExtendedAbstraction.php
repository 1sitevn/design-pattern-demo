<?php


namespace OneSite\DesignPattern\Bridge\Basic;

/**
 * Class ExtendedAbstraction
 * @package OneSite\DesignPattern\Bridge\Basic
 */
class ExtendedAbstraction extends Abstraction
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return "ExtendedAbstraction: Extended operation with:\n" .
            $this->implementation->operationImplementation();
    }
}

