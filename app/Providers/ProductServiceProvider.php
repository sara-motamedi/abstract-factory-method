<?php

namespace App\Providers;

use App\Abstracts\ProductCreator;
use App\Factories\DownloadableProductFactory;
use App\Factories\PhysicalProductFactory;
use App\Factories\ServiceProductFactory;
use Illuminate\Support\ServiceProvider;
use InvalidArgumentException;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $factories = [
            DownloadableProductFactory::IDENTIFIER => DownloadableProductFactory::class,
            PhysicalProductFactory::IDENTIFIER => PhysicalProductFactory::class,
            ServiceProductFactory::IDENTIFIER => ServiceProductFactory::class,
        ];


        $this->app->bind(ProductCreator::class, function ($app) use ($factories) {
            $type = request('type');

            if(is_null($type)){
                $type = config('product.default_type');

                return $app->make($factories[$type]);
            }

            if(!array_key_exists($type, $factories)){
                throw new InvalidArgumentException(__('errors.invalid_product_provider', ['type' => $type]));
            }
            return $app->make($factories[$type]);
        });
    }
}
