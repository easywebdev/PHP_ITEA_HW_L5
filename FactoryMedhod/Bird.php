<?php
require_once 'IEntity.php';

/**
 * Class Bird
 */
class Bird implements IEntity
{
    /**
     * @return string
     */
    public function eat() : string
    {
        return 'I am a bird and I am eatting';
    }

    /**
     * @return string
     */
    public function sleep(): string
    {
        return 'I am a bird I am sleeping';
    }
}