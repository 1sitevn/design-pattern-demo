<?php


namespace OneSite\DesignPattern\Facade;


/**
 * Class FFMpeg
 * @package OneSite\DesignPattern\Facade
 */
class FFMpeg
{
    /**
     * @return FFMpeg
     */
    public static function create(): FFMpeg
    { /* ... */
    }

    /**
     * @param string $video
     */
    public function open(string $video): void
    { /* ... */
    }
}
