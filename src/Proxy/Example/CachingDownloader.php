<?php


namespace OneSite\DesignPattern\Proxy\Example;


/**
 * Class CachingDownloader
 * @package OneSite\DesignPattern\Proxy\Example
 */
class CachingDownloader implements Downloader
{
    /**
     * @var SimpleDownloader
     */
    private $downloader;

    /**
     * @var string[]
     */
    private $cache = [];

    /**
     * CachingDownloader constructor.
     * @param SimpleDownloader $downloader
     */
    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    /**
     * @param string $url
     * @return string
     */
    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];
    }
}

