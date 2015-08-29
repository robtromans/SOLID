<?php

class OpenClosedPrincipalRefactoredTest extends PHPUnit_Framework_TestCase
{
    private $circle;

    private $square;

    public function __construct()
    {
        $this->circle = new SOLID\OCP\Refactored\Circle();
        $this->square = new SOLID\OCP\Refactored\Square();
    }

    public function testSquareArea()
    {
        $shapeManager = $this->getShapeManager($this->square);
        $this->assertEquals(50, $shapeManager->buildArea());
    }

    public function testCircleArea()
    {
        $shapeManager = $this->getShapeManager($this->circle);
        $this->assertEquals(113.10, $shapeManager->buildArea());
    }

    private function getShapeManager($shape)
    {
        return new SOLID\OCP\Refactored\ShapeManager($shape);
    }
}