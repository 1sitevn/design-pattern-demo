<?php


namespace OneSite\DesignPattern\Decorator\Example;


/**
 * Class DangerousHTMLTagsFilter
 * @package OneSite\DesignPattern\Decorator\Example
 */
class DangerousHTMLTagsFilter extends TextFormat
{
    /**
     * @var array
     */
    private $dangerousTagPatterns = [
        "|<script.*?>([\s\S]*)?</script>|i", // ...
    ];

    /**
     * @var array
     */
    private $dangerousAttributes = [
        "onclick", "onkeypress", // ...
    ];


    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        foreach ($this->dangerousTagPatterns as $pattern) {
            $text = preg_replace($pattern, '', $text);
        }

        foreach ($this->dangerousAttributes as $attribute) {
            $text = preg_replace_callback('|<(.*?)>|', function ($matches) use ($attribute) {
                $result = preg_replace("|$attribute=|i", '', $matches[1]);
                return "<" . $result . ">";
            }, $text);
        }

        return $text;
    }
}
