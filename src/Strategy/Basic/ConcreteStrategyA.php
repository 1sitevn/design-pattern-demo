<?php


namespace OneSite\DesignPattern\Strategy\Basic;

/**
 * Class ConcreteStrategyA
 * @package OneSite\DesignPattern\Strategy\Basic
 */
class ConcreteStrategyA implements Strategy
{
    /**
     * @param array $data
     * @return array
     */
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}

