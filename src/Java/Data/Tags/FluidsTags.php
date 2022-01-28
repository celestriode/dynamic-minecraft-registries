<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data\Tags;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class FluidsTags extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.tags.fluid_tags';
    }
}