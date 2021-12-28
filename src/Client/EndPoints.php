<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Client;

/**
 * Class EndPoints
 * @package LiritoPay\SimpleMercadoPago\Sdk\Client
 */
class EndPoints
{
    const CHECKOUT_PREFERENCES = '/checkout/preferences';

    const CHECKOUT_PREFERENCES_SEARCH = '/checkout/preferences/search';

    const CHECKOUT_PREFERENCES_SEARCH_PARAMS = [
        'sponsor_id',
        'external_reference',
        'site_id',
        'marketplace',
    ];

    const CHECKOUT_PREFERENCES_ID = '/checkout/preferences/%s';

    const IDENTIFICATION_TYPES = '/v1/identification_types';

    const PAYMENT_METHODS = '/v1/payment_methods';

    const PAYMENTS = '/v1/payments';

    const PAYMENTS_SEARCH = '/v1/payments/search';

    const PAYMENTS_SEARCH_PARAMS = [
        'sort',
        'criteria',
        'external_reference',
    ];

    const PAYMENTS_ID = '/v1/payments/%s';

    const PAYMENTS_REFUNDS = '/v1/payments/%s/refunds';

    const PAYMENTS_ID_REFUNDS_ID = '/v1/payments/%s/refunds/%s';

    const CHARGEBACKS_ID = '/v1/chargebacks/%s';

}