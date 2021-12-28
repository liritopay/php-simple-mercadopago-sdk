<?php

namespace LiritoPay\SimpleMercadoPago\Sdk\Traits;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait as LoggerAbstract;

/**
 * Trait LoggerTrait
 * @package LiritoPay\SimpleMercadoPago\Sdk\Traits
 */
trait LoggerTrait
{
    use LoggerAbstract;
    use LoggerAwareTrait;

    /**
     * @return LoggerInterface|null
     */
    public function getLogger(): ?LoggerInterface
    {
        return $this->logger;
    }

    /**
     * @param $level
     * @param $message
     * @param array $context
     * @return void
     */
    public function log($level, $message, array $context = array())
    {
        if ($this->getLogger()) {
            return $this->getLogger()->log($level, $message, $context);
        }
    }
}