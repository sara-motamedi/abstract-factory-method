<?php

namespace App\Abstracts;

use App\Interfaces\PresenterInterface;
use App\Interfaces\ProductInterface;

Abstract class ProductCreator
{
    /**
     * Creates a product instance.
     *
     * Concrete implementations should return an instance of a class that implements the ProductInterface.
     *
     * @return ProductInterface The created product instance.
     */
    abstract public function createProduct(): ProductInterface;

    /**
     * Creates a presenter instance.
     *
     * Concrete implementations should return an instance of a class that implements the PresenterInterface.
     *
     * @return PresenterInterface The created presenter instance.
     */
    abstract public function createPresenter(): PresenterInterface;
}
