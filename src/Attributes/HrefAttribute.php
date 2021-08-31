<?php

namespace App\Attributes;

final class HrefAttribute extends ItemAttribute
{
    /**
     * @inheritDoc
     */
    public function __construct(string $value)
    {
        parent::__construct('href', $value);
    }
}
