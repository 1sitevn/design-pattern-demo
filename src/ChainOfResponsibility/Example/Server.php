<?php


namespace OneSite\DesignPattern\ChainOfResponsibility\Example;


/**
 * Class Server
 * @package OneSite\DesignPattern\ChainOfResponsibility\Example
 */
class Server
{
    /**
     * @var array
     */
    private $users = [];

    /**
     * @var Middleware
     */
    private $middleware;

    /**
     * The client can configure the server with a chain of middleware objects.
     */
    public function setMiddleware(Middleware $middleware): void
    {
        $this->middleware = $middleware;
    }

    /**
     * The server gets the email and password from the client and sends the
     * authorization request to the middleware.
     */
    public function logIn(string $email, string $password): bool
    {
        if ($this->middleware->check($email, $password)) {
            echo "Server: Authorization has been successful!\n";

            // Do something useful for authorized users.

            return true;
        }

        return false;
    }

    /**
     * @param string $email
     * @param string $password
     */
    public function register(string $email, string $password): void
    {
        $this->users[$email] = $password;
    }

    /**
     * @param string $email
     * @return bool
     */
    public function hasEmail(string $email): bool
    {
        return isset($this->users[$email]);
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function isValidPassword(string $email, string $password): bool
    {
        return $this->users[$email] === $password;
    }
}
