<?php
require_once 'CUnitFactory.php';
require_once 'TerranFactory.php';
require_once 'ZergFactory.php';
require_once 'ProtosFactory.php';

echo '<h1>Abstrack Factory</h1>';

// Terran Units
$terranFactory = new TerranFactory();
$unitFactory = new CUnitFactory();
$unitFactory->setFactory($terranFactory);
$worker = $unitFactory->createUnit('worker');
$solder = $unitFactory->createUnit('solder');

$moveAction = $worker->moveAction();
$doAction = $worker->doAction();

$moveAction2 = $solder->moveAction();
$doAction2 = $solder->doAction();

echo '<h3>Terran Units:</h3>';
echo "<p>$moveAction</p>";
echo "<p>$doAction</p>";
echo "<p>$moveAction2</p>";
echo "<p>$doAction2</p>";


// Zerg Units
$zergFactory = new ZergFactory();
$unitFactory = new CUnitFactory();
$unitFactory->setFactory($zergFactory);
$worker = $unitFactory->createUnit('worker');
$solder = $unitFactory->createUnit('solder');

$moveAction = $worker->moveAction();
$doAction = $worker->doAction();

$moveAction2 = $solder->moveAction();
$doAction2 = $solder->doAction();

echo '<h3>Zerg Units:</h3>';
echo "<p>$moveAction</p>";
echo "<p>$doAction</p>";
echo "<p>$moveAction2</p>";
echo "<p>$doAction2</p>";

// Protos Units
$protosFactory = new ProtosFactory();
$unitFactory = new CUnitFactory();
$unitFactory->setFactory($protosFactory);
$worker = $unitFactory->createUnit('worker');
$solder = $unitFactory->createUnit('solder');

$moveAction = $worker->moveAction();
$doAction = $worker->doAction();

$moveAction2 = $solder->moveAction();
$doAction2 = $solder->doAction();

echo '<h3>Protos Units:</h3>';
echo "<p>$moveAction</p>";
echo "<p>$doAction</p>";
echo "<p>$moveAction2</p>";
echo "<p>$doAction2</p>";