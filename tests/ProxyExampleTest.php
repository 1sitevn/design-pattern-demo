<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Adapter\Base\Target;
use OneSite\DesignPattern\Proxy\Base\Proxy;
use OneSite\DesignPattern\Proxy\Base\RealSubject;
use OneSite\DesignPattern\Proxy\Base\Subject;
use OneSite\DesignPattern\Proxy\Example\CachingDownloader;
use OneSite\DesignPattern\Proxy\Example\Downloader;
use OneSite\DesignPattern\Proxy\Example\SimpleDownloader;
use PHPUnit\Framework\TestCase;


/**
 * Class ProxyExampleTest
 * @package OneSite\DesignPattern\Tests
 */
class ProxyExampleTest extends TestCase
{

    /**
     *
     */
    public function testHandle()
    {
        echo "Executing client code with real subject:\n";
        $realSubject = new SimpleDownloader();
        $this->clientCode($realSubject);

        echo "\n";

        echo "Executing the same client code with a proxy:\n";
        $proxy = new CachingDownloader($realSubject);
        $this->clientCode($proxy);

        return $this->assertTrue(true);
    }


    /**
     * @param Downloader $subject
     */
    private function clientCode(Downloader $subject)
    {
        $result = $subject->download("http://example.com/");

        // Duplicate download requests could be cached for a speed gain.

        $result = $subject->download("http://example.com/");
    }

}
