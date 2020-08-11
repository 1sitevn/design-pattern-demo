<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Bridge\Basic\Abstraction;
use OneSite\DesignPattern\Bridge\Basic\ConcreteImplementationA;
use OneSite\DesignPattern\Bridge\Basic\ConcreteImplementationB;
use OneSite\DesignPattern\Bridge\Basic\ExtendedAbstraction;
use OneSite\DesignPattern\Bridge\Example\HTMLRenderer;
use OneSite\DesignPattern\Bridge\Example\JsonRenderer;
use OneSite\DesignPattern\Bridge\Example\Page;
use OneSite\DesignPattern\Bridge\Example\Product;
use OneSite\DesignPattern\Bridge\Example\ProductPage;
use OneSite\DesignPattern\Bridge\Example\SimplePage;
use PHPUnit\Framework\TestCase;


class BridgeExampleTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        /**
         * The client code can be executed with any pre-configured combination of the
         * Abstraction+Implementation.
         */
        $HTMLRenderer = new HTMLRenderer();
        $JSONRenderer = new JsonRenderer();

        $page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
        echo "HTML view of a simple content page:\n";
        $this->clientCode($page);
        echo "\n\n";

        /**
         * The Abstraction can change the linked Implementation at runtime if needed.
         */
        $page->changeRenderer($JSONRenderer);
        echo "JSON view of a simple content page, rendered with the same client code:\n";
        $this->clientCode($page);
        echo "\n\n";

        $product = new Product("123", "Star Wars, episode1",
            "A long time ago in a galaxy far, far away...",
            "/images/star-wars.jpeg", 39.95);

        $page = new ProductPage($HTMLRenderer, $product);
        echo "HTML view of a product page, same client code:\n";
        $this->clientCode($page);
        echo "\n\n";

        $page->changeRenderer($JSONRenderer);
        echo "JSON view of a simple content page, with the same client code:\n";
        $this->clientCode($page);

        return $this->assertTrue(true);
    }

    function clientCode(Page $page)
    {
        echo $page->view();
    }
}
