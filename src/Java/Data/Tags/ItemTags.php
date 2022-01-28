<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data\Tags;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class ItemTags extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.tags.item_tags';
    }
}