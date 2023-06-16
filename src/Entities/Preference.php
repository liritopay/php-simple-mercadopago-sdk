<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Entities;

use LiritoPay\SimpleMercadoPago\Sdk\Collections\Preference\Items;
use LiritoPay\SimpleMercadoPago\Sdk\Collections\Preference\Metadata;
use LiritoPay\SimpleMercadoPago\Sdk\Collections\Preference\Taxes;
use LiritoPay\SimpleMercadoPago\Sdk\Collections\Preference\Tracks;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\AutoReturn;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\BackUrls;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\DifferentialPricing;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\Payer;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\PaymentMethods;
use LiritoPay\SimpleMercadoPago\Sdk\Entities\Preference\Shipments;

class Preference extends EntityAbstract
{
    /**
     * Preference ID
     *
     * @var string
     */
    protected string $id;

    /**
     * Set Checkout Pro when is approved ou any situation redirect to the site
     * @see AutoReturn class to get the prosibles values
     * @var string
     */
    protected string $autoReturn;

    /**
     * Set the URL to return when the payment is approved
     *
     * @var BackUrls
     */
    protected BackUrls $backUrls;

    /**
     * Set the URL to return when has a payment change
     *
     * @var string
     */
    protected string $notificationUrl;

    /**
     * URL to redirect the user to initialize the payment process
     *
     * @var string
     */
    protected string $initPoint;

    /**
     * URL to redirect the user to initialize the payment process in sandbox mode
     *
     * @var string
     */
    protected string $sandboxInitPoint;

    /**
     * Operation type, the default value is "regular_payment"
     *
     * @var string
     */
    protected string $operationType;

    /**
     * Additional information about the payment
     *
     * @var string
     */
    protected string $additionalInfo;

    /**
     * External reference to identify the payment in your system
     *
     * @var string
     */
    protected string $externalReference;

    /**
     * Set the expiration date is required
     *
     * @var bool
     */
    protected bool $expires;

    /**
     * Set the expiration date from
     *
     * @var string
     */
    protected string $expirationDateFrom;

    /**
     * Set the expiration date to
     *
     * @var string
     */
    protected string $expirationDateTo;

    /**
     * Set the expiration date of the ticket or bank transfer payment method
     *
     * @var string
     */
    protected string $dateOfExpiration;

    /**
     * Set the collector ID
     *
     * @var string
     */
    protected string $collectorId;

    /**
     * Set the client ID
     * @var string
     */
    protected string $clientId;

    /**
     * Set the marketplace
     *
     * @var string
     */
    protected string $marketplace;

    /**
     * Set the marketplace fee
     *
     * @var int
     */
    protected int $marketplaceFee;

    /**
     * Set the differential pricing
     *
     * @var DifferentialPricing
     */
    protected DifferentialPricing $differentialPricing;

    /**
     * Set the payment methods are available
     *
     * @var PaymentMethods
     */
    protected PaymentMethods $paymentMethods;

    /**
     * Set the items
     *
     * @var Items
     */
    protected Items $items;

    /**
     * Set the payer
     *
     * @var Payer
     */
    protected Payer $payer;

    /**
     *  Set the shipments
     *
     * @var Shipments
     */
    protected Shipments $shipments;

    /**
     * @var string
     */
    protected string $dateCreated;

    /**
     * @var string
     */
    protected string $sponsorId;

    /**
     * @var string
     */
    protected string $processingModes;

    /**
     * @var bool
     */
    protected bool $binaryMode;

    /**
     * @var Taxes
     */
    protected Taxes $taxes;

    /**
     * @var string
     */
    protected string $statementDescriptor;

    /**
     * @var Metadata
     */
    protected Metadata $metadata;

    /**
     * @var Tracks
     */
    protected Tracks $tracks;

    /**
     * @var string
     */
    protected string $purpose;
}