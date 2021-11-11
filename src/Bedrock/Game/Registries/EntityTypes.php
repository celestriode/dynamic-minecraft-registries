<?php namespace Celestriode\DynamicMinecraftRegistries\Bedrock\Game\Registries;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class EntityTypes extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'bedrock.game.registries.entity_types';
    }
}