<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Resources;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Fonts extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.resources.fonts';
    }
}