<?php
namespace Tests\Feature;

use Senki\EmojiParade\Serve;
use PHPUnit\Framework\TestCase;

class ServeTest extends TestCase
{
    public function testSyntaxError()
    {
        $var = new Serve();
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testMethodRandom()
    {
        $var = new Serve();
        $var->random();
        // $this->assertContains('Content-type: image/svg+xml', xdebug_get_headers());
        $this->expectOutputRegex('/<svg.*><\/svg>/');
        unset($var);
    }

    public function testMethodPickWithZero()
    {
        $var = new Serve();
        $this->expectOutputRegex('/<svg.*><\/svg>/');
        $var->pick(0);
        unset($var);
    }

    public function testMethodPickWithInvalid()
    {
        $var = new Serve();
        $this->expectOutputString('');
        $var->pick(10000);
        unset($var);
    }
}
