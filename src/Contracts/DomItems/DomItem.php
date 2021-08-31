<?php

namespace App\Contracts\DomItems;

interface DomItem
{
    /**
     * @return string
     */
    public function tree(): string;

    /**
     * @return bool
     */
    public function inline(): bool;

    /**
     * @return bool
     */
    public function block(): bool;
}
