<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Collections;

use Exception;
use Traversable;

/**
 * Class CollectionAbstract
 * @package LiritoPay\SimpleMercadoPago\Sdk\Collections
 */
abstract class CollectionAbstract implements \IteratorAggregate, \Countable, \JsonSerializable
{
    /**
     * @var array
     */
    protected array $collection = [];

    /**
     * @param $entity
     * @param null $key
     */
    public function add($entity, $key = null)
    {
        if (is_null($key)) {
            $this->collection[] = $entity;
        } else {
            $this->collection[$key] = $entity;
        }
    }

    /**
     * @inheritDoc
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->collection);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->collection);
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->collection;
    }
}