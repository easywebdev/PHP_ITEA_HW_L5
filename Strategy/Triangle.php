<?php
require_once 'IMath.php';

/**
 * Class Triangle
 */
class Triangle implements IMath
{
    /**
     * @param float $a
     * @param float $h
     * @return float
     */
    public function calcSquare(float $a, float $h): float
    {
        $square = 0.5 * $a * $h;
        return $square;
    }
}