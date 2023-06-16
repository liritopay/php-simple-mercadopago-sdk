<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\Items;

use LiritoPay\SimpleMercadoPago\Sdk\Entities\EntityAbstract;

class Item extends EntityAbstract
{
    protected string $id;

    protected string $pictureUrl;

    protected string $title;

    protected string $description;

    protected string $categoryId;

    protected string $currencyId;

    protected int $quantity;

    protected float $unitPrice;
}