<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\ChainOfResponsibility\Example\RoleCheckMiddleware;
use OneSite\DesignPattern\ChainOfResponsibility\Example\Server;
use OneSite\DesignPattern\ChainOfResponsibility\Example\ThrottlingMiddleware;
use OneSite\DesignPattern\ChainOfResponsibility\Example\UserExistsMiddleware;
use PHPUnit\Framework\TestCase;


/**
 * Class ChainOfResponsibilityExampleTest
 * @package OneSite\DesignPattern\Tests
 */
class ChainOfResponsibilityExampleTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        /**
         * The client code.
         */
        $server = new Server();
        $server->register("admin@example.com", "admin_pass");
        $server->register("user@example.com", "user_pass");


        $middleware = new ThrottlingMiddleware(2);
        $middleware
            ->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware());

        $server->setMiddleware($middleware);

        $success = $server->logIn('admin@example.com', 'admin_pass1');
        var_dump($success);
        $success = $server->logIn('admin@example.com', 'admin_pass');
        var_dump($success);
        $success = $server->logIn('admin@example.com', 'admin_pass');
        var_dump($success);
        $success = $server->logIn('admin@example.com', 'admin_pass');
        var_dump($success);

        return $this->assertTrue(true);
    }

}
