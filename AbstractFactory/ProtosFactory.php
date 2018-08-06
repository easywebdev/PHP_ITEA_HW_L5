<?php
require_once 'IUnitFactory.php';

/**
 * Class ProtosFactory
 */
class ProtosFactory implements IUnitFactory
{
    /**
     * @var string
     */
    private $rase = 'Protos';

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
                $this->unitType = new Worker('Probe', $this->rase);
                break;
            case 'solder':
                $this->unitType = new Solder('Stalker', $this->rase);
                break;
        }

        return $this->unitType;
    }
}