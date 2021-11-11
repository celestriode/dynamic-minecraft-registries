<?php namespace Celestriode\DynamicMinecraftRegistries\Bedrock\Game;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Gamemodes extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'bedrock.game.gamemodes';
    }
}