<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stagiairesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('Voir/{id}',[stagiairesController::class,'Voir']);
Route::get('/',[stagiairesController::class,'Read']);
Route::get('Delete/{id}',[stagiairesController::class,'Delete']);
Route::get('Update/{id}',[stagiairesController::class,'Updatedata']);
Route::get('add',function(){
    return view('add');
});
Route::post('ajouter',[stagiairesController::class,'add']);

Route::post('update/{id}',[stagiairesController::class,'update']);





