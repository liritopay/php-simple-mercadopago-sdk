<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference;

use LiritoPay\SimpleMercadoPago\Sdk\Entities\EntityAbstract;

class Shipments extends EntityAbstract
{
    /**
     * Shipments method mode
     * custom: Custom shipping mode
     * not_specified: Shipments mode not specified
     * me2: Mercado Envios mode
     *
     * @var string
     */
    protected string $mode;

    /**
     * Preference to get packages in the agency (mode: me2 only)
     *
     * @var bool
     */
    protected bool $localPickup;

    /**
     * Package dimensions cm x cm x cm, gr (mode: me2 only)
     *
     * @var string
     */
    protected string $dimensions;

    /**
     * Default shipping method choice (mode: me2 only)
     * @var string
     */
    protected string $defaultShippingMethod;


    protected string $freeMethods;

    protected string $cost;

    protected string $freeShipping;

    protected string $receiverAddress;
}