<?php
require_once 'IUnitFactory.php';

class ZergFactory implements IUnitFactory
{
    /**
     * @var string
     */
    private $rase = 'Zerg';

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
                $this->unitType = new Worker('Zergling', $this->rase);
                break;
            case 'solder':
                $this->unitType = new Solder('Hydra', $this->rase);
                break;
        }

        return $this->unitType;
    }
}