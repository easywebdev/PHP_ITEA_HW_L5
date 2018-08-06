<?php
require_once 'IUnit.php';

class Solder implements IUnit
{
    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $rase;

    /**
     * Worker constructor.
     * @param $name
     */
    public function __construct($name, $rase)
    {
        $this->name = $name;
        $this->rase = $rase;
    }

    /**
     * @param string $rase
     * @return string
     */
    public function moveAction(): string
    {
        return "I am $this->rase $this->name. I am moveing quicly";
    }

    /**
     * @param string $rase
     * @return string
     */
    public function doAction(): string
    {
        return "I am $this->rase $this->name. I am shouting";
    }
}