<?php

namespace App\Attributes;

final class ClassAttribute extends ItemAttribute
{
    /**
     * @inheritDoc
     */
    public function __construct(string $value)
    {
        parent::__construct('class', $value);
    }
}
