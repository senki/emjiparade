<?php
/**
 * emoji files downloaded on 2018-07-03 12:01:52 from https://github.com/twitter/twemoji
 */

namespace Senki\EmojiParade;

/**
 * RandomEmoji
 */
class Serve
{
    protected $emoji;

    public function __construct()
    {
        $this->emoji = new Emoji;
    }

    public function random()
    {
        header('Content-type: image/svg+xml');
        echo $this->emoji->random();
    }

    public function pick(int $no)
    {
        if (!$this->emoji->pick($no)) {
            header("HTTP/1.0 404 Not Found");
            return;
        }
        header('Content-type: image/svg+xml');
        echo $this->emoji->pick($no);
    }
}
