<?php

namespace Ds;

/**
 * @template TKey
 * @template TValue
 */
class Map implements \IteratorAggregate, \ArrayAccess, \Countable
{
    public function __construct(iterable $values = []) {}
    public function capacity(): int {}
    public function clear(): void {}
    public function copy(): Map {}
    public function diff(Map $map): Map {}
    public function filter(callable $callback = null): Map {}
    public function first(): mixed {}
    public function get(mixed $key): mixed {}
    public function hasKey(mixed $key): bool {}
    public function hasValue(mixed $value): bool {}
    public function intersect(Map $map): Map {}
    public function keys(): \Ds\Set {}
    public function ksort(callable $comparator = null): void {}
    public function last(): mixed {}
    public function map(callable $callback): Map {}
    public function merge(Map $map): Map {}
    public function put(mixed $key, mixed $value): void {}
    public function reduce(callable $callback, mixed $initial = null): mixed {}
    public function remove(mixed $key): mixed {}
    public function reverse(): void {}
    public function skip(int $position): Map {}
    public function slice(int $index, int $length = null): Map {}
    public function sort(callable $comparator = null): void {}
    public function sum(): int|float {}
    public function toArray(): array {}
    public function union(Map $map): Map {}
    public function values(): \Ds\Sequence {}
    public function xor(Map $map): Map {}
    public function getIterator(): \Traversable {}
    public function count(): int {}
    public function offsetExists(mixed $key): bool {}
    public function offsetGet(mixed $key): mixed {}
    public function offsetSet(mixed $key, mixed $value): void {}
    public function offsetUnset(mixed $key): void {}
}
