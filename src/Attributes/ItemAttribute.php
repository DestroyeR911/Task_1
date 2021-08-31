<?php

namespace App\Attributes;

abstract class ItemAttribute
{
    /**
     * @var string
     */
    protected string $key;

    /**
     * @var string
     */
    protected string $value;

    /**
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function key(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "{$this->key}=\"{$this->value}\"";
    }
}
