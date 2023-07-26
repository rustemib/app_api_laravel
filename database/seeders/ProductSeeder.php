<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\ProductProperty;
use Database\Factories\ProductFactory;
use Database\Factories\ProductPropertyFactory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Метод factory() используется для создания нового экземпляра фабрики
        // ProductFactory, который затем используется для создания новых экземпляров
        // модели Product и сохранения их в базе данных.

        // Метод count(80) указывает, что должно быть создано ровно 80 новых экземпляров модели.
        // Если фабрике определены отношения или другие сложные свойства, они автоматически
        // обрабатываются при создании новых экземпляров.

        // Метод create() в конце говорит Laravel фактически создать эти экземпляры и сохранить их в базе данных.
        // После вызова этого метода в базе данных должно быть 80 новых записей для товаров.
        Product::factory()->count(80)->create();
    }

}
