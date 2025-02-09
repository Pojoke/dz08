<?php

abstract class Shape
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    abstract public function draw();

    public function move($x = 0, $y = 0)
    {
        echo "Рухаємо фігуру: старі координати $this->x $this->y Нові координати $x $y";
        $this->x = $x;
        $this->y = $y;
    }
}

//$s = new Shape (2,4);

class RectangleDrawer extends Shape
{
    protected $width;
    protected $height;

    public function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->width  = $width;
        $this->height = $height;
    }

    public function draw()
    {
        // echo "Малюємо прямокутник: параметри: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . "\n";
        echo "<div style='position:absolute;top:{$this->y}px;left:{$this->x}px;width:{$this->width}px;height:{$this->height}px;border:solid blue;border-radius: 20px;'></div>";
    }
}


// class RoundRectangleDrawer extends RectangleDrawer
// {

// }



$rect1   = new RectangleDrawer(10, 20, 30, 40);
$rect2   = new RectangleDrawer(500, 600, 700, 800);
// $circle3 = new CircleDrawer(150, 160, 30);
// $circle4 = new CircleDrawer(250, 260, 60);
$shapes  = [$rect1, $rect2];

foreach ($shapes as $shape) {
    // echo $shape->draw();
    $shape->move();
    echo $shape->draw();
}