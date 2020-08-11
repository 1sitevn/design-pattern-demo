<?php


namespace OneSite\DesignPattern\Decorator\Example;


/**
 * Class TextFormat
 * @package OneSite\DesignPattern\Decorator\Example
 */
class TextFormat implements InputFormat
{
    /**
     * @var InputFormat
     */
    protected $inputFormat;

    /**
     * TextFormat constructor.
     * @param InputFormat $inputFormat
     */
    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * Decorator delegates all work to a wrapped component.
     */
    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}
