<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Возвращает массив с определениями для создания нового экземпляра модели Product.
        return [
            // 'name' - имя товара, генерируется как случайное предложение из 3 слов.
            'name' => $this->faker->sentence(3),

            // 'price' - цена товара, генерируется как случайное число с плавающей точкой,
            // с двумя знаками после запятой в диапазоне от 1 до 100.
            'price' => $this->faker->randomFloat(2, 1, 100),

            // 'quantity' - количество товара на складе, генерируется как случайное число в диапазоне от 1 до 100.
            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }

}
