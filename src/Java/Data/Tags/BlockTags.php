<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data\Tags;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class BlockTags extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.tags.block_tags';
    }
}