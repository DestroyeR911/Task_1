<?php

namespace App\DomItems;

use App\Collections\AttributeList;
use App\Collections\DomContentList;
use InvalidArgumentException;

abstract class DoubleTagItem extends TagItem
{
    /**
     * @var DomContentList
     */
    private DomContentList $content;

    /**
     * @param string $tag
     * @param DomContentList|null $content
     * @param AttributeList|null $attributes
     */
    public function __construct(
        string $tag,
        ?AttributeList $attributes,
        ?DomContentList $content
    ) {
        parent::__construct($tag, $attributes);
        $content = $content ?? new DomContentList;

        if (! $this->validContent($content)) {
            throw new InvalidArgumentException('Inline items cannot contain block items');
        }

        $this->content = $content;
    }

    /**
     * @param DomContentList $content
     *
     * @return bool
     */
    private function validContent(DomContentList $content): bool
    {
        if ($this->block()) {
            return true;
        }

        return $this->inline() && $content->doesNotContainBlockItems();
    }

    /**
     * @inheritDoc
     */
    public function tree(): string
    {
        return sprintf(
            "<%s%s>%s</%s>",
            $this->tag,
            $this->attributes->stringList(),
            $this->content->tree(),
            $this->tag
        );
    }
}
