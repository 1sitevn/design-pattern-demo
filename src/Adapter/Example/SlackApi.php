<?php


namespace OneSite\DesignPattern\Adapter\Example;


/**
 * Class SlackApi
 * @package OneSite\DesignPattern\Adapter\Example
 */
class SlackApi
{
    /**
     * @var string
     */
    private $login;
    /**
     * @var string
     */
    private $apiKey;

    /**
     * SlackApi constructor.
     * @param string $login
     * @param string $apiKey
     */
    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    /**
     *
     */
    public function logIn(): void
    {
        // Send authentication request to Slack web service.
        echo "Logged in to a slack account '{$this->login}'.\n";
    }

    /**
     * @param string $chatId
     * @param string $message
     */
    public function sendMessage(string $chatId, string $message): void
    {
        // Send message post request to Slack web service.
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}
