<?php


namespace OneSite\DesignPattern\Bridge\Basic;


/**
 * Class Abstraction
 * @package OneSite\DesignPattern\Bridge\Basic
 */
class Abstraction
{
    /**
     * @var Implementation
     */
    protected $implementation;

    /**
     * Abstraction constructor.
     * @param Implementation $implementation
     */
    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * @return string
     */
    public function operation(): string
    {
        return "Abstraction: Base operation with:\n" .
            $this->implementation->operationImplementation();
    }
}
