<?php namespace Celestriode\DynamicMinecraftRegistries\Bedrock\Other;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class SelectorTargets extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'bedrock.other.selector_targets';
    }
}