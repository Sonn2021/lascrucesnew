<?php

use Illuminate\Database\Seeder;

class CabinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cabins')->insert([
            'nombre'=>'La Virgen de las Rocas',
            'costo'=>'1000',
            'descripcion'=> 'Recámara matrimonial, baño seco y regadera',
            'imagen' => '/',
        ]);
        DB::table('cabins')->insert([
            'nombre'=>'El nacimiento de Venus',
            'costo'=>'1300',
            'descripcion'=> 'Recámara Queen size, baño seco y regadera',
            'imagen' => '/',
        ]);
        DB::table('cabins')->insert([
            'nombre'=>'La primavera',
            'costo'=>'1500',
            'descripcion'=> 'Recámara matrimonial, baño y regadera convencional',
            'imagen' => '/',
        ]);
        DB::table('cabins')->insert([
            'nombre'=>'La familia',
            'costo'=>'1800',
            'descripcion'=> 'Recámara King, recámara matrimonial, baño y regadera convencional.',
            'imagen' => '/',
        ]);
    }
}
