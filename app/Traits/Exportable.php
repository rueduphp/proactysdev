<?php
namespace Proactys\Traits;

use Symfony\Component\Yaml\Exception\DumpException;
use Symfony\Component\Yaml\Yaml;

trait Exportable
{
    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->__items);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->__items;
    }

    /**
     * @param  int $inline
     * @param  int $indent
     * @return string
     * @throws DumpException
     */
    public function toYml($inline = 3, $indent = 2): string
    {
        return Yaml::dump($this->toArray(), $inline, $indent, true, false);
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_PRETTY_PRINT);
    }
}
