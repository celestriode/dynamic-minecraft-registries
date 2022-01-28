<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data\Tags;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class EntityTypeTags extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.tags.entity_type_tags';
    }
}