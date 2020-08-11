<?php


namespace OneSite\DesignPattern\Decorator\Example;


/**
 * Interface InputFormat
 * @package OneSite\DesignPattern\Decorator\Example
 */
interface InputFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string;
}
