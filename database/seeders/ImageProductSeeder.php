<?php

namespace Database\Seeders;

use App\Models\ImageProduct;
use Illuminate\Database\Seeder;

class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ImageProduct::factory(30)->create();
    }
}
