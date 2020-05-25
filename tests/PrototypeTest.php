<?php


namespace OneSite\DesignPattern\Tests;


use OneSite\DesignPattern\Prototype\Author;
use OneSite\DesignPattern\Prototype\Page;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    /**
     *
     */
    public function testPrototypePattern()
    {
        $author = new Author("John Smith");
        $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

        // ...

        $page->addComment("Nice tip, thanks!");

        // ...

        $draft = clone $page;
        echo "\n\nDump of the clone. Note that the author is now referencing two objects.";
        print_r($draft);

        return $this->assertTrue(true);
    }
}
