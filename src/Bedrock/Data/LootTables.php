<?php namespace Celestriode\DynamicMinecraftRegistries\Bedrock\Data;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class LootTables extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'bedrock.data.loot_tables';
    }
}