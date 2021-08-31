<?php

namespace App\DomItems;

abstract class SingleTagItem extends TagItem
{
    /**
     * @inheritDoc
     */
    public function tree(): string
    {
        return sprintf(
            '<%s%s/>',
            $this->tag,
            $this->attributes->stringList()
        );
    }
}
