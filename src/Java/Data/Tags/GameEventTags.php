<?php namespace Celestriode\DynamicMinecraftRegistries\Java\Data\Tags;

use Celestriode\DynamicRegistry\AbstractStringRegistry;

class GameEventTags extends AbstractStringRegistry
{
    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'java.data.tags.game_event_tags';
    }
}