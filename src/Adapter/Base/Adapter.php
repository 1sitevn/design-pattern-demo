<?php


namespace OneSite\DesignPattern\Adapter\Base;


/**
 * Class Adapter
 * @package OneSite\DesignPattern\Adapter\Base
 */
class Adapter extends Target
{
    /**
     * @var Adaptee
     */
    private $adaptee;

    /**
     * Adapter constructor.
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * @return string
     */
    public function request(): string
    {
        return "Adapter: (TRANSLATED) " . strrev($this->adaptee->specificRequest());
    }
}
