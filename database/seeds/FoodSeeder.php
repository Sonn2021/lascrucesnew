<?php

use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food')->insert([
            'nombre'=>'Orden de barbacoa de res',
            'costo'=>'120',
            'descripcion'=>'Al horno de tierra',
            'reservacion'=>1,
            'imagen'=>'/img/Barbacoa.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Orden de barbacoa de borrego',
            'costo'=>'150',
            'descripcion'=>'Al horno de tierra',
            'reservacion'=>1,
            'imagen'=>'/img/Barbacoa_borrego.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Orden de carnitas',
            'costo'=>'100',
            'descripcion'=>'Al horno de tierra',
            'reservacion'=>1,
            'imagen'=>'/img/Carnitas.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Pizza',
            'costo'=>'240',
            'descripcion'=>'De pepperoni o hawaina',
            'reservacion'=>1,
            'imagen'=>'/img/Pizza.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Gordas de horno salada',
            'costo'=>'20',
            'descripcion'=>'De guisos variados',
            'reservacion'=>1,
            'imagen'=>'/img/Platillo_2.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Gordas de horno dulce',
            'costo'=>'20',
            'descripcion'=>'Con piloncillo',
            'reservacion'=>1,
            'imagen'=>'/img/GorditasAzucar.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Atole de arroz',
            'costo'=>'20',
            'descripcion'=>'Con canela y pasas',
            'reservacion'=>1,
            'imagen'=>'/img/atoleArroz.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Gorditas',
            'costo'=>'15',
            'descripcion'=>'De guisos variados',
            'reservacion'=>0,
            'imagen'=>'/img/GorditasComal.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Sopes sencillos',
            'costo'=>'15',
            'descripcion'=>'Con queso y crema',
            'reservacion'=>0,
            'imagen'=>'/img/Sopes.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Quesadilla sencilla',
            'costo'=>'35',
            'descripcion'=>'De guisos variados',
            'reservacion'=>0,
            'imagen'=>'/img/Quesadillas.jpeg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Quesadilla de arrachera',
            'costo'=>'45',
            'descripcion'=>'Con cebolla y salsa',
            'reservacion'=>0,
            'imagen'=>'/img/Q_arrachera.jpg',
        ]);

        DB::table('food')->insert([
            'nombre'=>'Menudo',
            'costo'=>'80',
            'descripcion'=>'Acompañado de tortillas hechas a mano',
            'reservacion'=>0,
            'imagen'=>'/img/Menudo.jpeg',
        ]);
    }
}
