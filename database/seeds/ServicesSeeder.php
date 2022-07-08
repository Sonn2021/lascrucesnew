<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'nombre'=>'Paseo a caballo',
            'costo'=>'200',
            'descripcion'=>'Precio por hora',
            'reservacion'=>1,
            'imagen'=>'/img/Caballo.jpg',
        ]);

        DB::table('services')->insert([
            'nombre'=>'Renta de cuatrimoto',
            'costo'=>'120',
            'descripcion'=>'Precio por hora',
            'reservacion'=>1,
            'imagen'=>'/img/cuatrimoto.jpeg',
        ]);

        DB::table('services')->insert([
            'nombre'=>'Renta de bicicleta',
            'costo'=>'50',
            'descripcion'=>'Precio por hora',
            'reservacion'=>1,
            'imagen'=>'/img/Bicicleta.jpg',
        ]);

        DB::table('services')->insert([
            'nombre'=>'Caminata guiada (2km, 4km, y 5km)',
            'costo'=>'20',
            'descripcion'=>'Por persona en grupos minimo de 10 (Gratis sin guía)',
            'reservacion'=>1,
            'imagen'=>'/img/Caminata.jpg',
        ]);

        DB::table('services')->insert([
            'nombre'=>'Espacio para acampar',
            'costo'=>'150',
            'descripcion'=>'Por noche y por tienda de campaña. Casa de campaña propia',
            'reservacion'=>1,
            'imagen'=>'/img/zona_acampar.jpeg',
        ]);

        DB::table('services')->insert([
            'nombre'=>'Espacio para eventos',
            'costo'=>'3000',
            'descripcion'=>'Por jornada de 10 horas. Incluye cocina, espacio techado con mobiliario rústico para 80 personas, baños secos, agua y vigilancia',
            'reservacion'=>1,
            'imagen'=>'/img/mesas.jpg',
        ]);

        DB::table('services')->insert([
            'nombre'=>'Leña para fogata',
            'costo'=>'10',
            'descripcion'=>'Por kilo',
            'reservacion'=>1,
            'imagen'=>'/img/Lena_1.jpg',
        ]);
    }
}
