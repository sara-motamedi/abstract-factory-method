<?php

namespace App\Factories;

use App\Abstracts\ProductCreator;
use App\Interfaces\PresenterInterface;
use App\Interfaces\ProductInterface;
use App\Services\Presenter\DownloadablePresenter;
use App\Services\Product\DownloadableProduct;

class DownloadableProductFactory extends ProductCreator
{
    /**
     * The identifier for downloadable products.
     */
    const IDENTIFIER = 'downloadable';

    /**
     * Creates an instance of a downloadable product.
     *
     * @return ProductInterface The created downloadable product.
     */
    public function createProduct(): ProductInterface
    {
        return new DownloadableProduct();
    }

    /**
     * Creates an instance of a presenter for downloadable products.
     *
     * @return PresenterInterface The created presenter for the downloadable product.
     */
    public function createPresenter(): PresenterInterface
    {
        return new DownloadablePresenter();
    }
}
