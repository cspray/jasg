<?php declare(strict_types=1);

namespace Cspray\Jasg;

final class Page extends AbstractContent implements Content {

    public function getType(): string {
        return ContentType::PAGE;
    }

}