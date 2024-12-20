<?php

namespace App\Services\Presenter;

use App\DTOs\ProductPresenterDTO;
use App\Interfaces\PresenterInterface;
use App\Interfaces\ProductInterface;

class ServicePresenter implements PresenterInterface
{
    /**
     * Presents the physical product's data in a structured format.
     *
     * @return string The data transfer object containing the presentation data.
     */
    public function present(): string
    {
        return 'This is a downloadable product.';
    }
}
