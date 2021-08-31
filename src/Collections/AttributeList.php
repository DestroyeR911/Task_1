<?php

namespace App\Collections;

use App\Attributes\ItemAttribute;

final class AttributeList extends Collection
{
    /**
     * @var ItemAttribute[]
     */
    protected array $items;

    /**
     * @return string
     */
    public function stringList(): string
    {
        $attributes = '';

        foreach ($this->items as $item) {
            $attributes .= " {$item->toString()} ";
        }

        return substr($attributes, 0, -1);
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function contain(string $key): bool
    {
        foreach ($this->items as $item) {
            if ($item->key() === $key) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function doesNotContain(string $key): bool
    {
        return ! $this->contain($key);
    }
}
