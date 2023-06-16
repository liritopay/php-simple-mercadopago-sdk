<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference;

use LiritoPay\SimpleMercadoPago\Sdk\Entities\EntityAbstract;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\Payer\Address;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\Payer\Identification;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\Payer\Phone;

class Payer extends EntityAbstract
{
    protected string $name;

    protected string $surname;

    protected string $email;

    protected string $dateCreated;

    protected Phone $phone;

    protected Identification $identification;

    protected Address $address;
}