<?php


namespace OneSite\DesignPattern\Strategy\Basic;


/**
 * Class Context
 * @package OneSite\DesignPattern\Strategy\Basic
 */
class Context
{

    /**
     * @var Strategy
     */
    private $strategy;


    /**
     * Context constructor.
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param Strategy $strategy
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }


    /**
     *
     */
    public function doSomeBusinessLogic(): void
    {
        // ...

        echo "Context: Sorting data using the strategy (not sure how it'll do it)\n";
        $result = $this->strategy->doAlgorithm(["a", "b", "c", "d", "e"]);
        echo implode(",", $result) . "\n";

        // ...
    }

}
