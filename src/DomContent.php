<?php

namespace App;

use App\Contracts\DomItems\DomItem;

final class DomContent implements DomItem
{
    /**
     * @var string
     */
    private string $content;

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = strip_tags($content);
    }

    /**
     * @inheritDoc
     */
    public function tree(): string
    {
        return $this->content;
    }

    /**
     * @inheritDoc
     */
    public function inline(): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function block(): bool
    {
        return ! $this->inline();
    }
}
