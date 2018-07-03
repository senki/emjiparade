<?php
/**
 * emoji files downloaded on 2018-07-03 12:01:52 from https://github.com/twitter/twemoji
 */

namespace Senki\EmojiParade;

/**
 * RandomEmoji
 */
class Emoji
{
    protected $twemojis;
    protected $max;

    public function __construct()
    {
        $files          = realpath(__DIR__.'/../twemoji').'/*.*';
        $this->twemojis = glob($files);
        $this->max      = count($this->twemojis);
    }

    public function random()
    {
        $key = array_rand($this->twemojis);
        return $this->returnSVGString($key);
    }

    public function pick(int $no)
    {
        return $no < $this->max ? $this->returnSVGString($no) : false;
    }

    protected function returnSVGString($key)
    {
        return file_get_contents($this->twemojis[$key]);
    }
}
