<?php

namespace Tiagolopes\Solid\DependencyInversion;

use Stripe\StripeClient;
use Tiagolopes\Solid\DependencyInversion\Contracts\PaymentGatewayInterface;

readonly class StripePaymentGateway implements PaymentGatewayInterface
{
    private StripeClient $client;
    public function __construct(?StripeClient $client)
    {
        $this->client = $client ?? new StripeClient();
    }

    public function pay(int $amount): void
    {
        $this->client->charges
            ->create(['amount' => $amount]);
    }
}
