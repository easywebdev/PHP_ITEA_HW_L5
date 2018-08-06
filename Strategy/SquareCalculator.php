<?php
require_once 'IMath.php';

/**
 * Class SquareCalculator
 */
class SquareCalculator
{
    /**
     * @var int
     */
    private $var1 = 0;

    /**
     * @var int
     */
    private $var2 = 0;

    /**
     * @param float $var1
     * @param float $var2
     */
    public function getVars(float $var1, float $var2) : void
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
    }

    /**
     * @param IMath $figure
     * @return float
     */
    public function squareCalculate(IMath $figure) : float
    {
        $square = $figure->calcSquare($this->var1, $this->var2);

        return $square;
    }
}