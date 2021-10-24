<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Game;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Colors extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.game.colors';
    }
}