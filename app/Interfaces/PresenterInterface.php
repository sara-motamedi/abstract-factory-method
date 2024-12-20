<?php

namespace App\Interfaces;

use App\DTOs\ProductPresenterDTO;

interface PresenterInterface
{
    /**
     * Presents the product data in a structured format.
     *
     * @return string The data transfer object containing the presentation data.
     */
    public function present(): string;
}
