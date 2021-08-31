<?php

namespace App\Collections;

abstract class Collection
{
    /**
     * @var array
     */
    protected array $items;

    /**
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }
}
