<?php

namespace App\DomItems;

use App\Collections\AttributeList;
use App\Collections\DomContentList;

final class DivItem extends DoubleTagItem
{
    /**
     * @inheritDoc
     */
    public function __construct(?AttributeList $attributes = null, ?DomContentList $contentList = null)
    {
        parent::__construct(
            'div',
            $attributes,
            $contentList
        );
    }

    /**
     * @inheritDoc
     */
    public function inline(): bool
    {
        return false;
    }
}
