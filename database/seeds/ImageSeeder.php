<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'imagen'=>'/img/platillo_pizza.jpg',
            'estacion'=>'primavera',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/Creacion.jpg',
            'estacion'=>'verano',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/mesa_decorada.jpg',
            'estacion'=>'invierno',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/Columpios.jpg',
            'estacion'=>'otono',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/pizza_completa.jpg',
            'estacion'=>'verano',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/vista_nave.jpg',
            'estacion'=>'otono',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/pan_dulce.jpg',
            'estacion'=>'invierno',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/huertos-verano.jpeg',
            'estacion'=>'verano',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/cruz-verano.jpeg',
            'estacion'=>'verano',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/maiz-verano.jpeg',
            'estacion'=>'verano',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/Regando.jpg',
            'estacion'=>'primavera',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/arcoirirs_2.jpg',
            'estacion'=>'primavera',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/arboles-verano.jpeg',
            'estacion'=>'verano',
        ]);

        DB::table('images')->insert([
            'imagen'=>'/img/Huertos_6.jpg',
            'estacion'=>'primavera',
        ]);
    }
}