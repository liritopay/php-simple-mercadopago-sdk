<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Entities;

class Preference extends EntityAbstract
{
    protected $id;

    protected $auto_return;

    protected $back_urls;

    protected $notification_url;

    protected $init_point;

    protected $sandbox_init_point;

    protected $operation_type;

    protected $additional_info;

    protected $external_reference;

    protected $expires;

    protected $expiration_date_from;

    protected $expiration_date_to;

    protected $date_of_expiration;

    protected $collector_id;

    protected $client_id;

    protected $marketplace;

    protected $marketplace_fee;

    protected $differential_pricing;

    protected $payment_methods;

    protected $items;

    protected $payer;

    protected $shipments;

    protected $date_created;

    protected $sponsor_id;

    protected $processing_modes;

    protected $binary_mode;

    protected $taxes;

    protected $statement_descriptor;

    protected $metadata;

    protected $tracks;
}