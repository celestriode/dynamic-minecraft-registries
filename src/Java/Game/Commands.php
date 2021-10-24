<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Game;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Commands extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.game.commands';
    }
}