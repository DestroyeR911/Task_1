<?php

use App\Attributes\ClassAttribute;
use App\Attributes\HrefAttribute;
use App\Attributes\IdAttribute;
use App\Attributes\SrcAttribute;
use App\Collections\AttributeList;
use App\Collections\DomContentList;
use App\DomContent;
use App\DomItems\AItem;
use App\DomItems\DivItem;
use App\DomItems\ImgItem;

require 'vendor/autoload.php';

$body = new DivItem(
    new AttributeList([
        new IdAttribute('content'),
    ]),
    new DomContentList([
        new ImgItem(
            new AttributeList([
                new ClassAttribute('avatar'),
                new SrcAttribute('https://picsum.photos/200')
            ])
        ),
        new AItem(
            new AttributeList([
                new HrefAttribute('https://picsum.photos'),
            ]),
            new DomContentList([
                new DomContent('https://picsum.photos'),
            ])
        ),
    ])
);

$tree = $body->tree();
dump($tree);
