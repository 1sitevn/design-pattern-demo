<?php


namespace OneSite\DesignPattern\ChainOfResponsibility\Base;


/**
 * Class AbstractHandler
 * @package OneSite\DesignPattern\ChainOfResponsibility\Base
 */
abstract class AbstractHandler implements Handler
{
    /**
     * @var Handler
     */
    private $nextHandler;

    /**
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        // Returning a handler from here will let us link handlers in a
        // convenient way like this:
        // $monkey->setNext($squirrel)->setNext($dog);
        return $handler;
    }

    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }

}
