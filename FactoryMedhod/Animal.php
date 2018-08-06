<?php
require_once 'IEntity.php';

/**
 * Class Animal
 */
class Animal implements IEntity
{
    /**
     * @return string
     */
    public function eat() : string
    {
        return 'I am a animal and I am eatting';
    }

    /**
     * @return string
     */
    public function sleep(): string
    {
        return 'I am a animal I am sleeping';
    }
}