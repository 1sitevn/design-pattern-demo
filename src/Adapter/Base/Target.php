<?php


namespace OneSite\DesignPattern\Adapter\Base;


/**
 * Class Target
 * @package OneSite\DesignPattern\Adapter\Base
 */
class Target
{
    /**
     * @return string
     */
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}
