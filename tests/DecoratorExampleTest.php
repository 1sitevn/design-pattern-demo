<?php


namespace OneSite\DesignPattern\Tests;

use OneSite\DesignPattern\Decorator\Example\DangerousHTMLTagsFilter;
use OneSite\DesignPattern\Decorator\Example\InputFormat;
use OneSite\DesignPattern\Decorator\Example\MarkdownFormat;
use OneSite\DesignPattern\Decorator\Example\PlainTextFilter;
use OneSite\DesignPattern\Decorator\Example\TextInput;
use PHPUnit\Framework\TestCase;


/**
 * Class DecoratorExampleTest
 * @package OneSite\DesignPattern\Tests
 */
class DecoratorExampleTest extends TestCase
{
    /**
     *
     */
    public function testHandle()
    {
        $dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

        $naiveInput = new TextInput();
        echo "Website renders comments without filtering (unsafe):\n";
        $this->displayCommentAsAWebsite($naiveInput, $dangerousComment);
        echo "\n\n\n";

        $filteredInput = new PlainTextFilter($naiveInput);
        echo "Website renders comments after stripping all tags (safe):\n";
        $this->displayCommentAsAWebsite($filteredInput, $dangerousComment);
        echo "\n\n\n";

        $dangerousForumPost = <<<HERE
# Welcome

This is my first post on this **gorgeous** forum.

<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

        $naiveInput = new TextInput();
        echo "Website renders a forum post without filtering and formatting (unsafe, ugly):\n";
        $this->displayCommentAsAWebsite($naiveInput, $dangerousForumPost);
        echo "\n\n\n";

        $text = new TextInput();
        $markdown = new MarkdownFormat($text);
        $filteredInput = new DangerousHTMLTagsFilter($markdown);
        echo "Website renders a forum post after translating markdown markup" .
            " and filtering some dangerous HTML tags and attributes (safe, pretty):\n";
        $this->displayCommentAsAWebsite($filteredInput, $dangerousForumPost);
        echo "\n\n\n";

        return $this->assertTrue(true);
    }

    /**
     * @param InputFormat $format
     * @param string $text
     */
    function displayCommentAsAWebsite(InputFormat $format, string $text)
    {
        echo $format->formatText($text);
    }
}
