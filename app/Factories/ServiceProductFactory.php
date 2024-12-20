<?php

namespace App\Factories;

use App\Abstracts\ProductCreator;
use App\Interfaces\PresenterInterface;
use App\Interfaces\ProductInterface;
use App\Services\Presenter\ServicePresenter;
use App\Services\Product\ServiceProduct;
use Psy\VarDumper\Presenter;

class ServiceProductFactory extends ProductCreator
{
    /**
     * The identifier for service products.
     */
    const IDENTIFIER = 'service';

    /**
     * Creates an instance of a service product.
     *
     * @return ProductInterface The created service product.
     */
    public function createProduct(): ProductInterface
    {
        return new ServiceProduct();
    }

    /**
     * Creates an instance of a presenter for service products.
     **
     * @return PresenterInterface The created presenter for the service product.
     */
    public function createPresenter(): PresenterInterface
    {
        return new ServicePresenter();
    }
}
