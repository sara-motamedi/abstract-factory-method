<?php

namespace App\Http\Controllers;

use App\Abstracts\ProductCreator;
use App\DTOs\ProductPresenterDTO;
use App\Http\Requests\Product\ProductShowRequest;
use Illuminate\Http\JsonResponse;
use InvalidArgumentException;

class ProductController extends Controller
{
    /**
     * The product presenter instance.
     *
     * @var ProductCreator
     */
    protected ProductCreator $productPresenter;

    /**
     * ProductController constructor.
     *
     * @param ProductCreator $productPresenter The product presenter factory instance.
     */
    public function __construct(ProductCreator $productPresenter)
    {
        $this->productPresenter = $productPresenter;
    }

    /**
     * Handles the request to show a product with its presentation.
     *
     * @return ProductPresenterDTO|JsonResponse The JSON response containing the product presentation or an error message.
     */
    public function show(ProductShowRequest $request): ProductPresenterDTO|JsonResponse
    {
        try {
            $product = $this->productPresenter->createProduct();

            $presenter = $this->productPresenter->createPresenter();

            $dto =  new ProductPresenterDTO(
                type: $request->input('type'),
                message: $presenter->present(),
                title: $product->title(),
                price: $product->price()
            );

            return response()->json($dto);

        } catch (InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
