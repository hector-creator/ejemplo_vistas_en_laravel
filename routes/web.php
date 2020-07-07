<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get("/", "MiControllador@index");
Route::get("/inicio", "MiControllador@inicio");
Route::get("/vinilicas", "MiControllador@vinilicas");
Route::get("/industrial", "MiControllador@industrial");
Route::get("/impermeabilizantes", "MiControllador@impermeabilizantes");
Route::get("/pegamentos", "MiControllador@pegamentos");
Route::get("/especialidades", "MiControllador@especialidades");
Route::get("/contacto", "MiControllador@contacto");
Route::get("/esmaltes", "MiControllador@esmaltes");
Route::get("/nosotros", "MiControllador@nosotros");
