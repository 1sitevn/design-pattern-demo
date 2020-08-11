<?php


namespace OneSite\DesignPattern\Decorator\Example;

/**
 * Class PlainTextFilter
 * @package OneSite\DesignPattern\Decorator\Example
 */
class PlainTextFilter extends TextFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        return strip_tags($text);
    }
}
