<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Structures extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.structures';
    }
}