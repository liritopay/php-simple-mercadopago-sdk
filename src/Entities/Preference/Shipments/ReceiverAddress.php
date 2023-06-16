<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\Shipments;

class ReceiverAddress extends \LiritoPay\SimpleMercadoPago\Sdk\Entities\EntityAbstract
{
    protected string $zipCode;

    protected string $streetName;

    protected string $cityName;

    protected string $stateName;

    protected int $streetNumber;

    protected string $floor;

    protected string $apartment;
}