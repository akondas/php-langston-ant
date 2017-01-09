<?php
declare(strict_types = 1);


class Ant
{

    private $world;

    private $x;

    private $y;

    private $direction;

    private $compass = ['NORTH', 'EAST', 'SOUTH', 'WEST'];

    /**
     * @param $world
     */
    public function __construct(World $world)
    {
        $this->world = $world;
        $this->x = (int) ($world->getWidth() / 2);
        $this->y = (int) ($world->getHeight() / 2);
        $this->direction = 0;
    }

    public function step()
    {
        if($this->world->isAlive($this->x, $this->y)) {
            $this->turnRight();
        } else {
            $this->turnLeft();
        }
        $this->world->toggle($this->x, $this->y);
        $this->makeMove();
    }

    private function turnRight()
    {
        $this->direction = $this->modulo($this->direction + 1, 4);
    }

    private function turnLeft()
    {
        $this->direction = $this->modulo($this->direction - 1, 4);
    }

    private function makeMove()
    {
        switch ($this->compass[$this->direction]) {
            case 'NORTH':
                $this->y++;
                break;
            case 'EAST':
                $this->x++;
                break;
            case 'SOUTH':
                $this->y--;
                break;
            case 'WEST':
                $this->x--;
                break;
        }

        $this->x = $this->modulo($this->x, $this->world->getWidth());
        $this->y = $this->modulo($this->y, $this->world->getHeight());
    }

    private function modulo($n, $d)
    {
        $n %= $d;
        if($n<0) {
            $n += abs($d);
        }

        return $n;
    }

}
