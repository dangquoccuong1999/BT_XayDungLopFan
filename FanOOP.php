<?php

define('SLOW', 1);
define('MEDIUM', 2);
define('FAST', 3);

class FanOOP
{
    private $speed = SLOW;
    private $on = false;
    private $radius = 5;
    private $color = 'blue';

//    public function __construct($speed, $on, $radius, $color)
//    {
//        $this->speed = $speed;
//        $this->on = $on;
//        $this->radius = $radius;
//        $this->color = $color;
//    }

    public function getColor()
    {
        return $this->color;
    }

    public function getOn()
    {
        return $this->on;
    }


    public function getRadius()
    {
        return $this->radius;
    }

    public function getSpeed()
    {
        return $this->speed;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setOn($on)
    {
        $this->on = $on;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function toString()
    {
        if ($this->on == true) {
            echo 'Tốc độ của quạt là ' . $this->speed . ' và màu sắc của quạt là màu ' . $this->color . ' bán kính là ' . $this->radius . ' fan is on';
        }
    }
}

$fan = new FanOOP();
$fan ->setSpeed(FAST);
$fan -> setOn(true);
$fan ->setRadius(10);
$fan -> setColor(yellow);
$fan ->toString();
echo '<br>';
$fan2 = new FanOOP();
$fan2 ->setSpeed(MEDIUM);
$fan2 -> setOn(true);
$fan2 ->setRadius(5);
$fan2 -> setColor(yellow);
$fan2 ->toString();