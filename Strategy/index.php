<?php
require_once 'SquareCalculator.php';
require_once 'Rectangle.php';
require_once 'Triangle.php';

echo '<h1>Strategy</h1>';

// Create Objects
$rectangle = new Rectangle();
$triangle = new Triangle();
$calculator = new SquareCalculator();

// Set Values
$calculator->getVars(5, 5);

// Calculate Square Rectangle
$square = $calculator->squareCalculate($rectangle);
echo "<p>Rectangle Square = $square</p>";

// Calculate Square Triangle
$square = $calculator->squareCalculate($triangle);
echo "<p>Triangle Square = $square</p>";