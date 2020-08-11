<?php


namespace OneSite\DesignPattern\Bridge\Example;


/**
 * Interface Renderer
 * @package OneSite\DesignPattern\Bridge\Example
 */
interface Renderer
{
    /**
     * @param string $title
     * @return string
     */
    public function renderTitle(string $title): string;

    /**
     * @param string $text
     * @return string
     */
    public function renderTextBlock(string $text): string;

    /**
     * @param string $url
     * @return string
     */
    public function renderImage(string $url): string;

    /**
     * @param string $url
     * @param string $title
     * @return string
     */
    public function renderLink(string $url, string $title): string;

    /**
     * @return string
     */
    public function renderHeader(): string;

    /**
     * @return string
     */
    public function renderFooter(): string;

    /**
     * @param array $parts
     * @return string
     */
    public function renderParts(array $parts): string;
}
