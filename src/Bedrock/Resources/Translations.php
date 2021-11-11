<?php namespace Celestriode\DynamicMinecraftRegistries\Bedrock\Resources;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class Translations extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'bedrock.resources.translations';
    }
}