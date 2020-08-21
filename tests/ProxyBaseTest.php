<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Adapter\Base\Target;
use OneSite\DesignPattern\Proxy\Base\Proxy;
use OneSite\DesignPattern\Proxy\Base\RealSubject;
use OneSite\DesignPattern\Proxy\Base\Subject;
use PHPUnit\Framework\TestCase;


/**
 * Class ProxyBaseTest
 * @package OneSite\DesignPattern\Tests
 */
class ProxyBaseTest extends TestCase
{

    /**
     *
     */
    public function testHandle()
    {
        echo "Client: Executing the client code with a real subject:\n";
        $realSubject = new RealSubject();
        $this->clientCode($realSubject);

        echo "\n";

        echo "Client: Executing the same client code with a proxy:\n";
        $proxy = new Proxy($realSubject);
        $this->clientCode($proxy);

        return $this->assertTrue(true);
    }

    /**
     * @param Subject $subject
     */
    private function clientCode(Subject $subject)
    {
        echo $subject->request();
    }

}
