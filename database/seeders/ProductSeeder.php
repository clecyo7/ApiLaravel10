<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Factory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::insert(
        //     [
        //         [
        //             'name'     => 'Geladeira',
        //             'description'    => 'consul',
        //             'price' => '10.90'
        //         ],
        //         [
        //             'name'     => 'TV Smart',
        //             'description'    => 'sansung',
        //             'price' => '1000.90'
        //         ],
        //         [
        //             'name'     => 'Cama box',
        //             'description'    => 'Otima cama',
        //             'price' => '800.00'
        //         ],
        //         [
        //             'name'     => 'Mesa',
        //             'description'    => 'Mesa de Jantar',
        //             'price' => '800.00'
        //         ]
        //     ]
        // );

        Product::factory()->count(50)->create();
    }
}
