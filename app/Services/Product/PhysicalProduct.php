<?php

namespace App\Services\Product;

use App\DTOs\ProductPresenterDTO;
use App\Interfaces\ProductInterface;

class PhysicalProduct implements ProductInterface
{
    public function title(): string
    {
        return 'Physical Product';
    }

    public function price(): float
    {
        return 31.99;
    }
}
