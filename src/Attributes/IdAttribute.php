<?php

namespace App\Attributes;

final class IdAttribute extends ItemAttribute
{
    /**
     * @inheritDoc
     */
    public function __construct(string $value)
    {
        parent::__construct('id', $value);
    }
}
