<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Recipes extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.recipes';
    }
}