<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Game\Registries;

class BlockEntityTypes extends \Celestriode\DynamicRegistry\AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.block_entity_types';
    }
}