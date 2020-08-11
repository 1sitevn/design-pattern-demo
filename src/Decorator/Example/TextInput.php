<?php


namespace OneSite\DesignPattern\Decorator\Example;


/**
 * Class TextInput
 * @package OneSite\DesignPattern\Decorator\Example
 */
class TextInput implements InputFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        return $text;
    }
}
