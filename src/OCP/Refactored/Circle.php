<?php

namespace SOLID\OCP\Refactored;

class Circle implements ShapeInterface
{
    private $radius = 6;
    
    public function area()
    {
        return number_format((float)(pow($this->radius, 2) * pi()), 2, '.', '');
    }
} 