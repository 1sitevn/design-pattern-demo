<?php


namespace OneSite\DesignPattern\Tests;


use OneSite\DesignPattern\ChainOfResponsibility\Base\DogHandler;
use OneSite\DesignPattern\ChainOfResponsibility\Base\Handler;
use OneSite\DesignPattern\ChainOfResponsibility\Base\MonkeyHandler;
use OneSite\DesignPattern\ChainOfResponsibility\Base\SquirrelHandler;
use PHPUnit\Framework\TestCase;

/**
 * Class ChainOfResponsibilityBaseTest
 * @package OneSite\DesignPattern\Tests
 */
class ChainOfResponsibilityBaseTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        $monkey = new MonkeyHandler();
        $squirrel = new SquirrelHandler();
        $dog = new DogHandler();

        $monkey->setNext($squirrel)->setNext($dog);

        echo "\nChain: Monkey > Squirrel > Dog\n";
        $this->clientCode($monkey);
        echo "\n";

        echo "\nSubchain: Squirrel > Dog\n";
        $this->clientCode($squirrel);

        return $this->assertTrue(true);
    }

    /**
     * @param Handler $handler
     */
    private function clientCode(Handler $handler)
    {
        foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
            echo "\nClient: Who wants a " . $food . "?\n";
            $result = $handler->handle($food);
            if ($result) {
                echo "\n" . $result;
            } else {
                echo "\n" . $food . " was left untouched.\n";
            }
        }
    }
}
