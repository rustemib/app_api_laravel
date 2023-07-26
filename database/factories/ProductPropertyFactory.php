<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductProperty>
 */
class ProductPropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Возвращает массив с определениями для создания нового экземпляра модели ProductProperty.
        return [
            // 'product_id' - ID товара, выбирается случайным образом из существующих ID товаров в базе данных.
            'product_id' => \App\Models\Product::inRandomOrder()->first()->id,

            // 'color1' и 'color2' - цвета товара, генерируются как случайные безопасные названия цветов.
            // Безопасные цвета - это набор из 16 цветов, которые поддерживаются всеми браузерами.
            'color1' => $this->faker->safeColorName,
            'color2' => $this->faker->safeColorName,

            // 'brand' - бренд товара, генерируется как случайное название компании.
            'brand' => $this->faker->company,
        ];
    }

}
