<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\ProductProperty;
use Database\Factories\ProductFactory;
use Database\Factories\ProductPropertyFactory;
use Illuminate\Database\Seeder;

class ProductPropertySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Метод factory() используется для создания нового экземпляра фабрики
        // ProductPropertyFactory, который затем используется для создания новых экземпляров
        // модели Attribute и сохранения их в базе данных.
        // Метод count(80) указывает, что должно быть создано ровно 80 новых экземпляров модели.
        // Метод create() в конце говорит Laravel фактически создать эти экземпляры и сохранить их в базе данных.
        // После вызова этого метода базе данных должно быть 80 новых записей для товаров.
        ProductProperty::factory()->count(80)->create();
    }

}
