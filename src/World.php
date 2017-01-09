<?php
declare(strict_types = 1);

class World
{

    private $canvas;

    private $width;

    private $height;

    public function __construct(int $width = 100, int $height=100)
    {
        $this->width = $width;
        $this->height = $height;
        $this->canvas = new \Drawille\Canvas();
    }

    public function isAlive(int $x, int $y): bool
    {
        return $this->canvas->get($x, $y);
    }

    public function toggle(int $x, int $y): void
    {
        $this->canvas->toggle($x, $y);
    }

    public function getFrame(): string
    {
        return $this->canvas->frame(['min_x' => 0, 'min_y' => 0]);
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

}
