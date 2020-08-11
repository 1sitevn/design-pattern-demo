<?php


namespace OneSite\DesignPattern\Decorator\Base;


/**
 * Class Decorator
 * @package OneSite\DesignPattern\Decorator\Base
 */
class Decorator implements Component
{
    /**
     * @var Component
     */
    protected $component;

    /**
     * Decorator constructor.
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    /**
     * The Decorator delegates all work to the wrapped component.
     */
    public function operation(): string
    {
        return $this->component->operation();
    }
}
