<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\BuscadorController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SeguidorController;
use App\Http\Controllers\HoroscopoController;
use App\Http\Controllers\TarotController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\BaneosController;





Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

//Controller home
Route::get('/home', [HomeController::class, 'cargarInicio'])->middleware(['auth', 'verified'])->name('home');
    
//Controller horoscopo
Route::get('/horoscopo', [HoroscopoController::class, 'Index']);
Route::post('/nuevoHoroscopo', [HoroscopoController::class, 'nuevoHoroscopo'])->name('nuevoHoroscopo');;

//Controller Tarot
Route::get('/tirada/{valor}', [TarotController::class, 'tirada'])->name('tirada');
Route::post('/pregunta', [TarotController::class, 'pregunta'])->name('pregunta');
Route::get('/coleccion', [TarotController::class, 'index'])->name('coleccion');


//Controller búsqueda
Route::post('/buscar',[BuscadorController::class, 'buscarDefault'])->name('buscar');
Route::post('/buscarF',[BuscadorController::class, 'buscarConFiltros'])->name('buscarF');

//Controller usuario
Route::get('perfil/{username}', [PerfilController::class, 'mostrar'])->name('perfil');

//Controller seguir
Route::post('seguir/{idUsuario}', [SeguidorController::class, 'seguirUsuario'])->name('seguirUsuario');
Route::delete('unfollow/{idUsuario}', [SeguidorController::class, 'unfollowUsuario'])->name('unfollowUsuario');

//Controller like
Route::post('/like/{publicacionId}', [LikeController::class,'like'])->name('like');
Route::delete('/unlike/{publicacionId}', [LikeController::class,'unlike'])->name('unlike');

//Controller comentario
Route::post('/comentarios/crear', [ComentarioController::class, 'crearComentario'])->name('crearComentario');
Route::delete('/comentarios/{id_comentario}', [ComentarioController::class, 'borrarComentario'])->name('borrarComentario');

//Controllers Publicaciones
Route::post('/horoskope',[PublicacionController::class,'NuevaPublicacion']);
Route::get('/publicacion/{id_publicacion}', [PublicacionController::class, 'mostrar'])->name('publicacion');
Route::delete('/publicacion/{id_publicacion}', [PublicacionController::class, 'borrar'])->name('borrarPublicacion');

//Controller Citas
Route::get('/tarot', [CitasController::class, 'obtenerFechasDisponibles'])->name('tarot');
Route::post('/solicitar-cita', [CitasController::class, 'solicitarCita'])->name('solicitar-cita');

//Ajax de Citas por pitonisa
Route::get('/fechas-disponibles/{id_pitonisa}', [CitasController::class, 'fechasAjax'])->name('fechas-disponibles');

//Controller citas
Route::get('/citas',[CitasController::class,'verCitas'])->name('citas');
Route::delete('/borrarCita/{id_cita}', [CitasController::class, 'borrarCita'])->name('borrarCita');
Route::post('/editarCita/{id_cita}',[CitasController::class,'editarCita'])->name('editarCita');


//Controller Reports
Route::get('/informes', [ReportesController::class,'verInformes'])->name('informes');
Route::post('/reportarUser/{id_user}', [ReportesController::class, 'reportarUser'])->name('reportarUser');
Route::post('/reportarComm/{id_comentario}', [ReportesController::class, 'reportarComentario'])->name('reportarComm');
Route::post('/reportar-publicacion/{id_publicacion}', [ReportesController::class, 'reportarPublicacion'])->name('reportarPubli');
Route::post('/editarInformeComentario/{id_informe}',[ReportesController::class,'editarInformeComentario'])->name('editarInformeComentario');
Route::post('/editarInformeUser/{id_informe}',[ReportesController::class,'editarInformeUser'])->name('editarInformeUser');
Route::post('/editarInformePublicacion/{id_informe}',[ReportesController::class,'editarInformePublicacion'])->name('editarInformePublicacion');

//Controller Baneos
Route::get('/baneos', [BaneosController::class,'verBans'])->name('baneos');

});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'updateFoto'])->name('profile.updateFoto');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
