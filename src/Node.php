<?php
declare(strict_types=1);

namespace Kregel\NginxParser;

class Node
{
    protected string $name;
    /** @var array<string, string> */
    protected array $attributes;
    /** @var Node[] */
    protected array $children;

    public function __construct(string $name, array $attributes = [], array $children = [])
    {
        $this->name       = $name;
        $this->attributes = $attributes;
        $this->children   = $children;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function __toString(): string
    {
        $line = $this->name;
        if (!empty($this->attributes)) {
            $line .= ' {';
            foreach ($this->attributes as $key => $value) {
                $line .= sprintf(
                    " %s: '%s'",
                    $key,
                    is_array($value) ? implode(', ', $value) : $value
                );
            }
            $line .= ' }';
        }

        return $line;
    }
}
