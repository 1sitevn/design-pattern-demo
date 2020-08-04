<?php


namespace OneSite\DesignPattern\ChainOfResponsibility\Base;


/**
 * Interface Handler
 * @package OneSite\DesignPattern\ChainOfResponsibility\Base
 */
interface Handler
{
    /**
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(Handler $handler): Handler;

    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string;
}
