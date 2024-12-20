<?php

namespace App\Services\Presenter;

use App\DTOs\ProductPresenterDTO;
use App\Interfaces\PresenterInterface;
use App\Interfaces\ProductInterface;

class DownloadablePresenter implements PresenterInterface
{
    /**
     * Presents the downloadable product's data in a structured format.
     *
     * @return string The data transfer object containing the presentation data.
     */
    public function present(): string
    {
        return 'This is a downloadable product.';
    }
}
