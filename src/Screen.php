<?php
declare(strict_types = 1);

class Screen
{
    /**
     * @var string
     */
    private $stream;

    /**
     * @param resource $stream
     */
    public function __construct($stream = STDOUT)
    {
        $this->stream = $stream;
        $this->hideCursor();
    }


    public function display(string $frame)
    {
        $this->moveCursorToStart();
        $this->newLine();
        fwrite($this->stream, $frame);
    }

    private function moveCursorToStart()
    {
        fwrite($this->stream, "\033[0;0f");
    }

    private function hideCursor()
    {
        fwrite($this->stream, "\033[?25l");
    }

    private function showCursor()
    {
        fwrite($this->stream, "\033[?25h\033[?0c");
    }

    private function newLine()
    {
        fwrite($this->stream, PHP_EOL);
    }

}
