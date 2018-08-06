<?php
require_once 'Engine.php';
require_once 'Textures.php';
require_once 'Players.php';

class GameFacade
{
    /**
     * @var Engine
     */
    private $engine;

    /**
     * @var Textures
     */
    private $textures;

    /**
     * @var Players
     */
    private $players;

    /**
     * GameFacade constructor.
     * @param Engine $engine
     * @param Textures $textures
     * @param Players $players
     */
    public function __construct(Engine $engine, Textures $textures, Players $players)
    {
        $this->engine = $engine;
        $this->textures = $textures;
        $this->players = $players;
    }

    /**
     *
     */
    public function startGame() : void
    {
        echo '<p>Game Loading...</p>';

        $checkEngine = $this->engine->loadEngine();
        $checkTextures = $this->textures->loadTextures();
        $checkPlayers = $this->players->loadPlayers();

        echo "<p>$checkEngine<br />$checkTextures<br />$checkPlayers</p>";
        echo '<p>Game Started</p>';
    }
}