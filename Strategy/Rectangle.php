<?php
require_once 'IMath.php';

/**
 * Class Rectangle
 */
class Rectangle implements IMath
{
    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function calcSquare(float $a, float $b): float
    {
        $square = $a * $b;

        return $square;
    }
}