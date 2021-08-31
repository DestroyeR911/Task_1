<?php

namespace App\DomItems;

use App\Collections\AttributeList;
use App\Contracts\DomItems\DomItem;

abstract class TagItem implements DomItem
{
    /**
     * @var string
     */
    protected string $tag;

    /**
     * @var AttributeList
     */
    protected AttributeList $attributes;

    /**
     * @param string $tag
     * @param AttributeList|null $attributes
     */
    public function __construct(
        string $tag,
        ?AttributeList $attributes
    ) {
        $this->tag = $tag;
        $this->attributes = $attributes ?? new AttributeList;
    }

    /**
     * @return bool
     */
    public function block(): bool
    {
        return ! $this->inline();
    }
}
