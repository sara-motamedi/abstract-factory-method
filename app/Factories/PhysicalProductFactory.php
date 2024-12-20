<?php

namespace App\Factories;

use App\Abstracts\ProductCreator;
use App\Interfaces\PresenterInterface;
use App\Interfaces\ProductInterface;
use App\Services\Presenter\PhysicalPresenter;
use App\Services\Product\PhysicalProduct;

class PhysicalProductFactory extends ProductCreator
{
    /**
     * The identifier for physical products.
     */
    const IDENTIFIER = 'physical';

    /**
     * Creates an instance of a physical product.
     *
     * @return ProductInterface The created physical product.
     */
    public function createProduct(): ProductInterface
    {
        return new PhysicalProduct();
    }

    /**
     * Creates an instance of a presenter for physical products.
     **
     * @return PresenterInterface The created presenter for the physical product.
     */
    public function createPresenter(): PresenterInterface
    {
        return new PhysicalPresenter();
    }
}
