<?php

namespace App\Services\Product;

use App\Interfaces\ProductInterface;

class DownloadableProduct implements ProductInterface
{
    public function title(): string
    {
        return 'E-book';
    }

    public function price(): float
    {
        return 9.99;
    }
}
