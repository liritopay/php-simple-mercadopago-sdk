<?php

namespace LiritoPay\SimpleMercadoPago\Sdk;

use LiritoPay\SimpleMercadoPago\Sdk\Client\Configuration;
use LiritoPay\SimpleMercadoPago\Sdk\Traits\LoggerTrait;
use Psr\Log\LoggerInterface;

/**
 * Class Client
 * @package LiritoPay\SimpleMercadoPago\Sdk
 */
class Client
{
    use LoggerTrait;

    /**
     * @var Configuration
     */
    protected Configuration $configuration;

    /**
     * Client constructor.
     * @param $accessToken
     * @param $publicKey
     * @param LoggerInterface|null $logger
     */
    public function __construct($accessToken, $publicKey, LoggerInterface $logger = null)
    {
        $this->configuration = new Configuration($accessToken, $publicKey);
        if ($logger instanceof LoggerInterface) {
            $this->setLogger($logger);
        }
    }

}