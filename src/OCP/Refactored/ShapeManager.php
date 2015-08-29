<?php

namespace SOLID\OCP\Refactored;

class ShapeManager
{
    protected $shape;

    public function __construct(ShapeInterface $shape)
    {
        $this->shape = $shape;
    }

    public function buildArea()
    {
        return $this->shape->area();
    }
}