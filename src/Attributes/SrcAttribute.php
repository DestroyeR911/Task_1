<?php

namespace App\Attributes;

final class SrcAttribute extends ItemAttribute
{
    /**
     * @inheritDoc
     */
    public function __construct(string $value)
    {
        parent::__construct('src', $value);
    }
}
