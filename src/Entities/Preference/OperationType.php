<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference;

class OperationType
{
    /**
     * Normal payment
     */
    public const REGULAR_PAYMENT = 'regular_payment';

    /**
     * Money request
     */
    public const MONEY_TRANSFER = 'money_transfer';
}