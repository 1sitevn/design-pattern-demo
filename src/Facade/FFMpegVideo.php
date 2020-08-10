<?php


namespace OneSite\DesignPattern\Facade;


/**
 * Class FFMpegVideo
 * @package OneSite\DesignPattern\Facade
 */
class FFMpegVideo
{
    /**
     * @return $this
     */
    public function filters(): self
    { /* ... */
    }

    /**
     * @return $this
     */
    public function resize(): self
    { /* ... */
    }

    /**
     * @return $this
     */
    public function synchronize(): self
    { /* ... */
    }

    /**
     * @return $this
     */
    public function frame(): self
    { /* ... */
    }

    /**
     * @param string $path
     * @return $this
     */
    public function save(string $path): self
    { /* ... */
    }

    // ...more methods and classes... RU: ...дополнительные методы и классы...
}
