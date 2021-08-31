<?php

namespace App\DomItems;

use App\Collections\AttributeList;
use InvalidArgumentException;

final class ImgItem extends SingleTagItem
{
    /**
     * @inheritDoc
     */
    public function __construct(?AttributeList $attributes = null)
    {
        parent::__construct(
            'img',
            $attributes
        );

        if ($this->attributes->doesNotContain('src')) {
            throw new InvalidArgumentException('Tag "img" must be contain "src" attribute');
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
