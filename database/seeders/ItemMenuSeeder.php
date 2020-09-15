<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Carro'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Barco'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Avion'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Buseta'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Taxi'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Carreta'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Bicicleta'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Bicitaxi'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Uber'
        ]);
        DB::table ('items_menu')->insert([
            'description_item_menu' => 'Caminando'
        ]);
    }
}
