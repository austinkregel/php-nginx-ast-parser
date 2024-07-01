<?php
declare(strict_types=1);

namespace Kregel\NginxParser;

class Token
{
    public function __construct(
        public string|int $literal,
        public int $token,
        public ?int $nextToken = null,
    ) {
    }

    public function hasContext()
    {
        return $this->nextToken !== null;
    }
}
