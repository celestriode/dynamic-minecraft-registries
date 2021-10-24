<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Game\Registries;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class FloatProviderTypes extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.game.registries.float_provider_types';
    }
}