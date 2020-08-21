<?php


namespace OneSite\DesignPattern\Proxy\Example;


/**
 * Interface Downloader
 * @package OneSite\DesignPattern\Proxy\Example
 */
interface Downloader
{
    /**
     * @param string $url
     * @return string
     */
    public function download(string $url): string;
}
