<?php
require_once 'IUnitFactory.php';
require_once 'Worker.php';
require_once 'Solder.php';

/**
 * Class TerranFactory
 */
class TerranFactory implements IUnitFactory
{
    /**
     * @var string
     */
    private $rase = 'Terran';

    /**
     * @var
     */
    private $unitType;

    /**
     * @param string $unitType
     * @return IUnit
     */
    public function createUnit(string $unitType): IUnit
    {

        switch ($unitType) {
            case 'worker':
                $this->unitType = new Worker('SCV', $this->rase);
                break;
            case 'solder':
                $this->unitType = new Solder('Marine', $this->rase);
                break;
        }

        return $this->unitType;
    }
}