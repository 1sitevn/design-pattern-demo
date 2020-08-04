<?php


namespace OneSite\DesignPattern\ChainOfResponsibility\Base;


/**
 * Class MonkeyHandler
 * @package OneSite\DesignPattern\ChainOfResponsibility\Base
 */
class MonkeyHandler extends AbstractHandler
{
    /**
     * @param string $request
     * @return string|null
     */
    public function handle(string $request): ?string
    {
        if ($request === "Banana") {
            return "Monkey: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }
    }
}
