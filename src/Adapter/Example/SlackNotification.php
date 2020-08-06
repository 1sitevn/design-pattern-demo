<?php


namespace OneSite\DesignPattern\Adapter\Example;


/**
 * Class SlackNotification
 * @package OneSite\DesignPattern\Adapter\Example
 */
class SlackNotification implements Notification
{
    /**
     * @var SlackApi
     */
    private $slack;
    /**
     * @var string
     */
    private $chatId;

    /**
     * SlackNotification constructor.
     * @param SlackApi $slack
     * @param string $chatId
     */
    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    /**
     * An Adapter is not only capable of adapting interfaces, but it can also
     * convert incoming data to the format required by the Adaptee.
     */
    public function send(string $title, string $message): void
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}
