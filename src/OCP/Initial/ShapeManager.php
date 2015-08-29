<?php

namespace SOLID\OCP\Initial;

class ShapeManager
{
    protected $square;

    public function __construct(Square $square)
    {
        $this->square = $square;
    }

    public function buildArea()
    {
        return $this->square->area();
    }
}