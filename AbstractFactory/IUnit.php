<?php

/**
 * Interface IUnit
 */
interface IUnit
{
    /**
     * @param string $rase
     * @return string
     */
    public function moveAction(): string ;

    /**
     * @param string $rase
     * @return string
     */
    public function doAction() : string ;
}