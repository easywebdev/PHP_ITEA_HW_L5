<?php
require_once 'IEntity.php';

/**
 * Class Fish
 */
class Fish implements IEntity
{
    /**
     * @return string
     */
    public function eat() : string
    {
        return 'I am a fish and I am eatting';
    }

    /**
     * @return string
     */
    public function sleep(): string
    {
        return 'I am a fish I am sleeping';
    }
}