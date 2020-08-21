<?php


namespace OneSite\DesignPattern\Proxy\Base;


/**
 * Class RealSubject
 * @package OneSite\DesignPattern\Proxy\Base
 */
class RealSubject implements Subject
{
    /**
     *
     */
    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}
