<?php


namespace OneSite\DesignPattern\Strategy\Basic;


/**
 * Interface Strategy
 * @package OneSite\DesignPattern\Strategy\Basic
 */
interface Strategy
{
    /**
     * @param array $data
     * @return array
     */
    public function doAlgorithm(array $data): array;
}
