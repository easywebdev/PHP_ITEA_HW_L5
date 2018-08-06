<?php
require_once 'Fish.php';
require_once 'Bird.php';
require_once 'Animal.php';

/**
 * Class FactoryEntity
 */
class FactoryEntity
{
    /**
     * @var
     */
    public $entity;

    /**
     * @param string $space
     * @return IEntity
     */
    public function getEntity(string $space) : IEntity
    {
        switch ($space) {
            case 'Water':
                $this->entity = new Fish();
                break;
            case 'Air':
                $this->entity = new Bird();
                break;
            case 'Ground':
                $this->entity = new Animal();
                break;
        }

        return $this->entity;
    }
}