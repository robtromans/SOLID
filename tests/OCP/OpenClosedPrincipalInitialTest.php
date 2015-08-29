<?php

class OpenClosedPrincipalInitialTest extends PHPUnit_Framework_TestCase
{
    private $shape;

    private $shapeManager;

    public function __construct()
    {
        $this->shape = new SOLID\OCP\Initial\Square();
        $this->shapeManager = new SOLID\OCP\Initial\ShapeManager($this->shape);
    }

    public function testShapeArea()
    {
        $this->assertEquals(50, $this->shapeManager->buildArea());
    }
}