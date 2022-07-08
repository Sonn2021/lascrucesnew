<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'GeneralController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/galeria', 'GeneralController@galeria');


/*Route::group(['middleware' => 'disable_back'],function(){
    //Auth::routes();
    Route::get('/gracias', 'ReservationController@gracias');
});*/

Route::get('/gracias', 'ReservationController@gracias')->middleware('disable_back');

/*Route::get('/gracias', function(){
    'ReservationController@gracias'
})->middleware('disable_back');*/

Route::get('/comida', 'FoodController@comida');

Route::get('/servicios', 'ServicesController@servicios');

Route::get('/recomendaciones_y_compromisos', 'GeneralController@recomendaciones_y_compromisos');

Route::get('/FAQ', 'GeneralController@FAQ');

Route::get('/acerca_de', 'GeneralController@acerca_de');

Route::get('/eliminaComida', 'ReservationController@eliminaComida');

Route::get('/eliminaServicios', 'ReservationController@eliminaServicios');

Route::post('/actualizaCantidad', 'ReservationController@actualizaCantidad')->name('actualizar.cantidad');

Route::get('/gracias', 'ReservationController@gracias')->name('pagina.final');

Route::get('/oxxoPdf', 'ReservationController@oxxoPDF')->name('fichaoxxo');

Route::get('/datos-reservarcion', 'ReservationController@datos');

Route::post('/datos-reservacion', 'ReservationController@guardarDatosReservacion')->name('datos.submit');

Route::get('/cabañas', 'ReservationController@cabanas');

Route::get('/info-cabana/{id}', 'ReservationController@infoCabanas');

Route::get('/reservar', 'ReservationController@reservacion');

Route::post('/filtra', 'ReservationController@filtra')->name('reservacion.info');

Route::get('/seleccion-comida', 'ReservationController@seleccionComida')->name("seleccion.comida");

Route::get('/seleccion-servicios', 'ReservationController@seleccionServicios')->name("seleccion.servicios");

Route::get('/orden', 'ReservationController@orden')->name("orden");

Route::post('/seleccion-comida', 'ReservationController@guardarSeleccion')->name("listacomida.submit");

Route::post('/seleccion-servicios', 'ReservationController@guardarSeleccion')->name("listaservicios.submit");

Route::get('/contacto', 'ContactController@contacto');

Route::post('/contacto','ContactController@enviar')->name('contacto.submit');

Route::get('/agregar-comida','FoodController@agregarComida');

Route::post('/agregar-comida','FoodController@guardarComida')->name('comida.submit');

Route::get('/preview-comida','FoodController@previewComida');

Route::get('/agregar-servicio','ServicesController@agregarServicio');

Route::post('/agregar-hora','ServicesController@guardarHoraServicio')->name('hora.submit');

Route::post('/agregar-servicio','ServicesController@guardarServicio')->name('servicio.submit');

Route::get('/preview-servicios','ServicesController@previewServicios');

Route::get('/reservaciones-realizadas','ReservationController@reservacionesRealizadas');

Route::get('/eliminar-reservacion/{id}','ReservationController@eliminarReservacion');

Route::get('/imagenes','GeneralController@imagenes');

Route::post('/agregar-imagen','GeneralController@guardarImagen')->name('imagen.submit');

Route::get('/actualizar-comida/{id}','FoodController@editar');

Route::get('/eliminar-comida/{id}','FoodController@eliminar');

Route::get('/actualizar-servicio/{id}', 'ServicesController@editar');

Route::get('/eliminar-servicio/{id}', 'ServicesController@eliminar');

Route::get('/eliminar-imagen/{id}', 'GeneralController@eliminar');