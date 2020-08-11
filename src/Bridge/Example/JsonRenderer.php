<?php


namespace OneSite\DesignPattern\Bridge\Example;


/**
 * Class JsonRenderer
 * @package OneSite\DesignPattern\Bridge\Example
 */
class JsonRenderer implements Renderer
{
    /**
     * @param string $title
     * @return string
     */
    public function renderTitle(string $title): string
    {
        return '"title": "' . $title . '"';
    }

    /**
     * @param string $text
     * @return string
     */
    public function renderTextBlock(string $text): string
    {
        return '"text": "' . $text . '"';
    }

    /**
     * @param string $url
     * @return string
     */
    public function renderImage(string $url): string
    {
        return '"img": "' . $url . '"';
    }

    /**
     * @param string $url
     * @param string $title
     * @return string
     */
    public function renderLink(string $url, string $title): string
    {
        return '"link": {"href": "' . $title . '", "title": "' . $title . '""}';
    }

    /**
     * @return string
     */
    public function renderHeader(): string
    {
        return '';
    }

    /**
     * @return string
     */
    public function renderFooter(): string
    {
        return '';
    }

    /**
     * @param array $parts
     * @return string
     */
    public function renderParts(array $parts): string
    {
        return "{\n" . implode(",\n", array_filter($parts)) . "\n}";
    }
}
