<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Tags extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.tags';
    }
}