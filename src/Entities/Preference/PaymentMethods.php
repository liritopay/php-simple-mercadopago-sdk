<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference;

use LiritoPay\SimpleMercadoPago\Sdk\Collections\Preference\PaymentMethods\ExcludedPaymentMethods;
use LiritoPay\SimpleMercadoPago\Sdk\Collections\Preference\PaymentMethods\ExcludedPaymentTypes;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\EntityAbstract;

class PaymentMethods extends EntityAbstract
{
    protected ExcludedPaymentMethods $excludedPaymentMethods;

    protected ExcludedPaymentTypes $excludedPaymentTypes;

    protected string $defaultPaymentMethodId;

    protected int $installments;

    protected int $defaultInstallments;
}