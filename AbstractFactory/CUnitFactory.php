<?php
require_once 'IUnitFactory.php';

/**
 * Class CUnitFactory
 */
class CUnitFactory
{
    /**
     * @var
     */
    private $factory;

    /**
     * @param IUnitFactory $factory
     */
    public function setFactory(IUnitFactory $factory)
    {
        $this->factory = new $factory;
    }

    /**
     * @param string $unitType
     * @return IUnit
     */
    public function createUnit(string $unitType) : IUnit {
        $unit = $this->factory->createUnit($unitType);
        return $unit;
    }
}