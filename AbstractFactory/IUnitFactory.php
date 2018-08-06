<?php

/**
 * Interface IUnitFactory
 */
interface IUnitFactory
{
    /**
     * @param string $unitType
     * @return IUnit
     */
    public function createUnit(string $unitType) : IUnit;
}