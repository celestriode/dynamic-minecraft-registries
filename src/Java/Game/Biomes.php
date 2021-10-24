<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Game;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Biomes extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.game.biomes';
    }
}