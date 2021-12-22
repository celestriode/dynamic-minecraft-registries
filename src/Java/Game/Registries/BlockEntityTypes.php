<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Game\Registries;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class BlockEntityTypes extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.block_entity_types';
    }
}