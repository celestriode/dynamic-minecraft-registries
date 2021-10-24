<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Game\Registries;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Motives extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.game.registries.motives';
    }
}