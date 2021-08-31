<?php

namespace App\Collections;

use App\Contracts\DomItems\DomItem;

final class DomContentList extends Collection
{
    /**
     * @var \App\Contracts\DomItems\DomItem[]
     */
    protected array $items;

    /**
     * @return string
     */
    public function tree(): string
    {
        $tree = '';

        foreach ($this->items as $item) {
            $tree .= $item->tree();
        }

        return $tree;
    }

    /**
     * @return bool
     */
    public function containBlockItems(): bool
    {
        foreach ($this->items as $item) {
            if ($item->block()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return bool
     */
    public function doesNotContainBlockItems(): bool
    {
        return ! $this->containBlockItems();
    }
}
