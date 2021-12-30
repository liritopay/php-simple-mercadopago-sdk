<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Client;

/**
 * Class Endpoints
 * @package LiritoPay\SimpleMercadoPago\Sdk\Client
 */
class Endpoints
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

    const CUSTOMERS = '/v1/customers';

    const CUSTOMERS_SEARCH = '/v1/customers/search';

    const CUSTOMERS_SEARCH_PARAMS = [
        'email',
    ];

    const CUSTOMERS_ID = '/v1/customers/%s';

    const CUSTOMERS_ID_CARDS = '/v1/customers/%s/cards';

    const CUSTOMERS_ID_CARDS_ID = '/v1/customers/%s/cards/%s';

    const STORES_ID = '/stores/%s';

    const USERS_ID_STORES = '/users/%s/stores';

    const USERS_ID_STORES_SEARCH = '/users/%s/stores/search';

    const USERS_ID_STORES_SEARCH_PARAMS = [
        'external_id',
    ];

    const USERS_ID_STORES_ID = '/users/%s/stores/%s';

    const POS =  '/pos';

    const POS_PARAMS = [
        'external_id',
        'external_store_id',
        'store_id',
        'category',
    ];

    const POS_ID = '/pos/%s';

    const IN_STORE_ORDERS = '/mpmobile/instore/qr/%s/%s';

    const IN_STORE_ORDERS_V2 = '/instore/qr/seller/collectors/%s/stores/%s/pos/%s/orders';

    const IN_STORE_ORDERS_ID_V2 = '/instore/qr/seller/collectors/%s/pos/%s/orders';

    const ORDERS = '/merchant_orders';

    const ORDERS_SEARCH = '/merchant_orders/search';

    const ORDERS_SEARCH_PARAMS = [
        'status',
        'preference_id',
        'application_id',
        'payer_id',
        'sponsor_id',
        'external_reference',
        'site_id',
        'marketplace',
        'date_created_from',
        'date_created_to',
        'last_updated_from',
        'last_updated_to',
        'items',
        'limit',
        'offset',
    ];

    const ORDERS_ID = '/merchant_orders/%s';

    const PREAPPROVAL = '/preapproval';
}