<?php

namespace SOLID\OCP\Initial;

class Square
{
    private $width = 10;

    private $height = 5;

    public function area()
    {
        return $this->width * $this->height;
    }
} 