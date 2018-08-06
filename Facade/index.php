<?php
require_once 'GameFacade.php';

echo '<h1>Facade</h1>';

$engine = new Engine();
$textures = new Textures();
$players = new Players();

$game = new GameFacade($engine, $textures, $players);
$game->startGame();