<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'ray',
            'email' => 'rayrlam@yahoo.com.hk',
            'password' => '$2y$10$HkwD/XaSY3Yn3RvjRpoo1O82QfOR8IAWebTXenk.LJROG9HCwNNu.',
            ]
        );


//         1 0 Clothing
// 2 0 Accessories
// 3 0 Watches
// 4 1 Women
// 5 1 Men
// 6 4 Tops
// 7 4 Trousers
// 8 5 T-Shirts
    }
}
