<?php

namespace SOLID\OCP\Refactored;

class Square implements ShapeInterface
{
    private $width = 10;

    private $height = 5;

    public function area()
    {
        return $this->width * $this->height;
    }
} 