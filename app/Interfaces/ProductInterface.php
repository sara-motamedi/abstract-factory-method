<?php

namespace App\Interfaces;

use App\DTOs\ProductPresenterDTO;

interface ProductInterface
{
    /**
     * Gets the title of the product.
     *
     * @return string The title of the product.
     */
    public function title(): string;

    /**
     * Gets the price of the product.
     *
     * @return float The price of the product.
     */
    public function price(): float;
}
