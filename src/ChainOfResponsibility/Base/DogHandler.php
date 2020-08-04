<?php


namespace OneSite\DesignPattern\ChainOfResponsibility\Base;


/**
 * Class DogHandler
 * @package OneSite\DesignPattern\ChainOfResponsibility\Base
 */
class DogHandler extends AbstractHandler
{
    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return "Dog: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}
