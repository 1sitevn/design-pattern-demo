<?php


namespace OneSite\DesignPattern\Adapter\Example;


/**
 * Class EmailNotification
 * @package OneSite\DesignPattern\Adapter\Example
 */
class EmailNotification implements Notification
{
    /**
     * @var string
     */
    private $adminEmail;

    /**
     * EmailNotification constructor.
     * @param string $adminEmail
     */
    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    /**
     * @param string $title
     * @param string $message
     */
    public function send(string $title, string $message): void
    {
        // mail($this->adminEmail, $title, $message);

        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}
