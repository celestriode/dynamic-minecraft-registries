<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Advancements extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.advancements';
    }
}