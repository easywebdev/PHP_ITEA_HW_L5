<?php
require_once 'FactoryEntity.php';

echo '<h1>Factory Method</h1>';

// Create Air Entity
$space = 'Air';
$getEntity = new FactoryEntity();
$Entity = $getEntity->getEntity($space);

$eat = $Entity->eat();
$sleep = $Entity->sleep();
echo 'Air space' . '<br />';
echo "<p>$eat<br />$sleep</p>";

// Create Water Entity
$space = 'Water';
$Entity = $getEntity->getEntity($space);

$eat = $Entity->eat();
$sleep = $Entity->sleep();
echo 'Water space' . '<br />';
echo "<p>$eat<br />$sleep</p>";

// Create Ground Entity
$space = 'Ground';
$Entity = $getEntity->getEntity($space);

$eat = $Entity->eat();
$sleep = $Entity->sleep();
echo 'Water space' . '<br />';
echo "<p>$eat<br />$sleep</p>";