<?php


namespace OneSite\DesignPattern\Strategy\Basic;


/**
 * Class ConcreteStrategyB
 * @package OneSite\DesignPattern\Strategy\Basic
 */
class ConcreteStrategyB implements Strategy
{
    /**
     * @param array $data
     * @return array
     */
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
