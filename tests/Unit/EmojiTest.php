<?php
namespace Tests\Unit;

use Senki\EmojiParade\Emoji;
use PHPUnit\Framework\TestCase;

class EmojiTest extends TestCase
{

    public function testSyntaxError()
    {
        $var = new Emoji;
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testMethodRandom()
    {
        $var = new Emoji;
        $this->assertStringMatchesFormat('<svg xmlns="http://www.w3.org/2000/svg"%a></svg>', $var->random());
        unset($var);
    }

    public function testMethodPick()
    {
        $var = new Emoji;
        $this->assertStringMatchesFormat('<svg xmlns="http://www.w3.org/2000/svg"%a></svg>', $var->pick(0));
        $this->assertFalse($var->pick(10000));
        unset($var);
    }
}
