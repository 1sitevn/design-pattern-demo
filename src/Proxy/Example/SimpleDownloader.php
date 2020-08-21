<?php


namespace OneSite\DesignPattern\Proxy\Example;


/**
 * Class SimpleDownloader
 * @package OneSite\DesignPattern\Proxy\Example
 */
class SimpleDownloader implements Downloader
{
    /**
     * @param string $url
     * @return string
     */
    public function download(string $url): string
    {
        echo "Downloading a file from the Internet.\n";
        $result = file_get_contents($url);
        echo "Downloaded bytes: " . strlen($result) . "\n";

        return $result;
    }
}
