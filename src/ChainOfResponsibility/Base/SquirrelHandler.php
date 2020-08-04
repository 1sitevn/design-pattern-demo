<?php


namespace OneSite\DesignPattern\ChainOfResponsibility\Base;


/**
 * Class SquirrelHandler
 * @package OneSite\DesignPattern\ChainOfResponsibility\Base
 */
class SquirrelHandler extends AbstractHandler
{
    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($request === "Nut") {
            return "Squirrel: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}
