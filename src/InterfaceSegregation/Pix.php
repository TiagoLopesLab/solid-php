<?php

namespace Tiagolopes\Solid\InterfaceSegregation;

use Tiagolopes\Solid\InterfaceSegregation\Contracts\PaymentMethodInterface;
use Tiagolopes\Solid\InterfaceSegregation\Contracts\QrCodeGenerableInterface;

class Pix implements PaymentMethodInterface, QrCodeGenerableInterface
{
    public function pay(): void
    {
        echo 'Pagamento via Pix' . PHP_EOL;
    }

    public function generateQrCode(): void
    {
        echo 'Gerando o QR Code' . PHP_EOL;
    }
}
