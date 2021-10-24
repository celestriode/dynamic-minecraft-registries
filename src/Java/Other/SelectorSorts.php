<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Other;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class SelectorSorts extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.other.selector_sorts';
    }
}