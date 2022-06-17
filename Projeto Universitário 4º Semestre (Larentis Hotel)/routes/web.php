<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'index'])->name('index');
Route::middleware('hospede')->get('/home', [App\Http\Controllers\PrincipalController::class, 'index']);


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contatos', [App\Http\Controllers\ContatoController::class, 'index']);
// Route::post('/contatos', [App\Http\Controllers\ContatoController::class, 'store'])->name('contatos');

//Route::get('/listausuarios', 'App\Http\Controllers\UserController@ListUser');

Route::middleware('atendente')->get('/gerencia', [App\Http\Controllers\GerenciaController::class, 'index']);
//Route::get('/gerencia_relatorios', [App\Http\Controllers\GerenciaRelatoriosController::class, 'index'])->name('gerencia_relatorios');
//Route::get('/gerencia_disponibilidades', [App\Http\Controllers\GerenciaDisponibilidadesController::class, 'index'])->name('gerencia_disponibilidades');
//Route::get('/gerencia_financeiro', [App\Http\Controllers\GerenciaFinanceiroController::class, 'index'])->name('gerencia_financeiro');
//Route::get('/balconista', [App\Http\Controllers\BalconistaController::class, 'index'])->name('balconista');
//Route::get('/balconista_disponibilidades', [App\Http\Controllers\BalconistaDisponibilidadesController::class, 'index'])->name('balconista_disponibilidades');
//Route::get('/balconista_consumo', [App\Http\Controllers\BalconistaConsumoController::class, 'index'])->name('balconista_consumo');
//Route::get('/balconista_lista_consumo', [App\Http\Controllers\BalconistaListaConsumoController::class, 'index'])->name('balconista_lista_consumo');

//resource produto consumo
Route::middleware('hospede')->get('/reserva', [App\Http\Controllers\ReservaController::class, 'create'])->name('reserva.create');
Route::middleware('hospede')->post('/reserva', [App\Http\Controllers\ReservaController::class, 'store'])->name('reserva.store');

// Route::middleware('hospede')->get('/reserva/create', [App\Http\Controllers\ReservaController::class, 'create'])->name('reserva.create');


Route::middleware('atendente')->resource('consumo', 'App\Http\Controllers\ConsumoController');
Route::middleware('atendente')->resource('produto', 'App\Http\Controllers\ProdutoController');
//Route::middleware('atendente')->get('pessoa_fisica', [App\Http\Controllers\PessoaFisicaController::class, 'index']);
Route::middleware('hospede')->resource('pessoa_fisica', 'App\Http\Controllers\PessoaFisicaController');
// Route::middleware('atendente')->resource('pessoa_fisica', 'App\Http\Controllers\PessoaFisicaController');
// Route::middleware('atendente')->resource('pessoa_fisica', 'App\Http\Controllers\PessoaFisicaController');
// Route::middleware('atendente')->resource('pessoa_fisica', 'App\Http\Controllers\PessoaFisicaController');
// Route::middleware('atendente')->resource('pessoa_fisica', 'App\Http\Controllers\PessoaFisicaController');
// Route::middleware('atendente')->resource('pessoa_fisica', 'App\Http\Controllers\PessoaFisicaController');
Route::middleware('atendente')->resource('funcionario', 'App\Http\Controllers\FuncionarioController');
Route::middleware('gerente')->resource('quarto', 'App\Http\Controllers\QuartoController');
Route::middleware('atendente')->resource('gasto', 'App\Http\Controllers\GastoController');
Route::middleware('atendente')->resource('endereco', 'App\Http\Controllers\EnderecoController');
Route::middleware('atendente')->resource('pessoa_juridica', 'App\Http\Controllers\PessoaJuridicaController');
// Route::middleware('hospede')->resource('perfil', 'App\Http\Controllers\PerfilController');
Route::middleware('atendente')->get('pessoa_fisica', [App\Http\Controllers\PessoaFisicaController::class, 'index'])->name('pessoa_fisica');
