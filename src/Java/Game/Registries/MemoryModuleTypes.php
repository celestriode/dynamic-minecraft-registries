<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Game\Registries;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class MemoryModuleTypes extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.game.registries.memory_module_types';
    }
}