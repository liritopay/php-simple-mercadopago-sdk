<?php


namespace LiritoPay\SimpleMercadoPago\Sdk\Client;


class Configuration
{
    /**
     * @var string
     */
    protected string $accessToken;

    /**
     * @var string
     */
    protected string $publicKey;

    /**
     * Configuration constructor.
     * @param string $accessToken
     * @param string $publicKey
     */
    public function __construct(string $accessToken, string $publicKey)
    {
        $this->accessToken = $accessToken;
        $this->publicKey = $publicKey;
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    /**
     * @param string $publicKey
     */
    public function setPublicKey(string $publicKey): void
    {
        $this->publicKey = $publicKey;
    }

}