<?php

namespace LiritoPay\PhpSimpleMercadoPago\Sdk\Entities;

/**
 * Class EntityAbstract
 * @package LiritoPay\PhpSimpleMercadoPago\Sdk\Entities
 */
abstract class EntityAbstract implements \JsonSerializable
{
    /**
     * @param $data
     */
    public function setData($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $properties = get_object_vars($this);

        $data = [];
        foreach ($properties as $property => $value) {
            if ($value instanceof EntityAbstract) {
                $data[$property] = $value->toArray();
                continue;
            }

            if ((is_array($value) && count($value)) || $value instanceof \IteratorAggregate) {
                foreach ($value as $index => $item) {
                    if ($item instanceof EntityAbstract) {
                        $data[$property][$index] = $item->toArray();
                    } else {
                        $data[$property][$index] = $item;
                    }
                }
                continue;
            }

            if (!is_null($this->$property)) {
                $data[$property] = $this->$property;
            }
        }

        return $data;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}