<?php


namespace OneSite\DesignPattern\ChainOfResponsibility\Example;


/**
 * Class UserExistsMiddleware
 * @package OneSite\DesignPattern\ChainOfResponsibility\Example
 */
class UserExistsMiddleware extends Middleware
{
    /**
     * @var Server
     */
    private $server;

    /**
     * UserExistsMiddleware constructor.
     * @param Server $server
     */
    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            echo "UserExistsMiddleware: This email is not registered!\n";

            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            echo "UserExistsMiddleware: Wrong password!\n";

            return false;
        }

        return parent::check($email, $password);
    }
}
