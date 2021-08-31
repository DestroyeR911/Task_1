<?php

namespace App\DomItems;

use App\Collections\AttributeList;
use App\Collections\DomContentList;
use InvalidArgumentException;

final class AItem extends DoubleTagItem
{
    /**
     * @inheritDoc
     */
    public function __construct(?AttributeList $attributes = null, ?DomContentList $contentList = null)
    {
        parent::__construct(
            'a',
            $attributes,
            $contentList
        );

        if ($this->attributes->doesNotContain('href')) {
            throw new InvalidArgumentException('Tag "a" must be contain "href" attribute');
        }
    }

    /**
     * @inheritDoc
     */
    public function inline(): bool
    {
        return true;
    }
}
