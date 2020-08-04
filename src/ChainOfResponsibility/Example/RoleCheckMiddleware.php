<?php


namespace OneSite\DesignPattern\ChainOfResponsibility\Example;


/**
 * This Concrete Middleware checks whether a user associated with the request
 * has sufficient permissions.
 */
class RoleCheckMiddleware extends Middleware
{
    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        if ($email === "admin@example.com") {
            echo "RoleCheckMiddleware: Hello, admin!\n";

            return true;
        }
        echo "RoleCheckMiddleware: Hello, user!\n";

        return parent::check($email, $password);
    }
}
