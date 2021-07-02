<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveles')->insert(['clave' => 'N01O', 'nivel' => 'Oro',]);
        DB::table('niveles')->insert(['clave' => 'N02P', 'nivel' => 'Plata',]);
        DB::table('niveles')->insert(['clave' => 'N03B', 'nivel' => 'Bronce',]);
    }
}
