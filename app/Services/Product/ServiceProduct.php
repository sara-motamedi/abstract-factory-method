<?php

namespace App\Services\Product;

use App\DTOs\ProductPresenterDTO;
use App\Interfaces\ProductInterface;

class ServiceProduct implements ProductInterface
{
    public function title(): string
    {
        return 'Service product';
    }

    public function price(): float
    {
        return 34.99;
    }
}
