<?php

namespace App\DTOs;

/**
 * Data Transfer Object for Product Presentation
 *
 * This DTO encapsulates the data required for presenting a product,
 * including its type, title, price, and a custom message.
 */
readonly class ProductPresenterDTO
{
    /**
     * @param string $type The type of the product (e.g., downloadable, physical, service).
     * @param string $message A custom message related to the product presentation.
     * @param string $title The title of the product.
     * @param float $price The price of the product.
     */
    public function __construct(
        public string $type,
        public string $message,
        public string $title,
        public float $price
    ) {}

    /**
     * Converts the DTO to an array representation.
     *
     * @return array{
     *     type: string,
     *     title: string,
     *     price: float,
     *     message: string
     * } The array representation of the DTO.
     */
    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'title' => $this->title,
            'price' => $this->price,
            'message' => $this->message,
        ];
    }
}
