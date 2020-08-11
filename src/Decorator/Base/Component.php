<?php


namespace OneSite\DesignPattern\Decorator\Base;


/**
 * Interface Component
 * @package OneSite\DesignPattern\Decorator\Base
 */
interface Component
{
    /**
     * @return string
     */
    public function operation(): string;
}
