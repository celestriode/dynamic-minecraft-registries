<?php namespace Celestriode\DynamicMinecraftRegistries\Bedrock\Game\Registries;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class EntityFamilies extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'bedrock.game.registries.entity_families';
    }
}