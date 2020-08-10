<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Facade\YouTubeDownloader;
use PHPUnit\Framework\TestCase;

/**
 * Class FacadeTest
 * @package OneSite\DesignPattern\Tests
 */
class FacadeTest extends TestCase
{

    /**
     *
     */
    public function testHandle()
    {
        $facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");

        $this->clientCode($facade);

        return $this->assertTrue(true);
    }

    /**
     * @param YouTubeDownloader $facade
     */
    private function clientCode(YouTubeDownloader $facade)
    {
        $facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");
    }

}
