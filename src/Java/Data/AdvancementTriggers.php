<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class AdvancementTriggers extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.advancement_triggers';
    }
}