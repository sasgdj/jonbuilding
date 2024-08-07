<?php
use App\Http\Controllers\RegistrosController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/Programador', 'RegistrosController')->middleware(['auth', 'role:Programador']);


Route::group(['prefix' => 'profile', 'middleware' => ['auth']], function(){
  Route::get('/', 'ProfileController@index')->name('profile.index');
  Route::put('/', 'ProfileController@update')->name('profile.update');
  Route::put('/pass', 'ProfileController@pass')->name('profile.pass');
  Route::put('/avatar', 'ProfileController@update_avatar')->name('profile.avatar');
});// /group prefix=>profile

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
  Route::resource('usuarios', 'Admin\UsuariosController')->except([
    'index', 'show',
  ]);
  Route::get('usuarios/{activos?}', 'Admin\UsuariosController@index')->name('usuarios.index');
  Route::redirect('usuarios/inactivos', '/usuarios/0')->name('usuarios.inactivos');
  Route::post('usuarios/{usuario}', 'Admin\UsuariosController@restore')->name('usuarios.restore');

  Route::resource('roles', 'Admin\RolesController')->except([
    'show','destroy',
  ]);
  Route::get('roles/usuario/{usuario}', 'Admin\RolesController@rolesUsuario')->name('roles.usuario');
  Route::post('roles/agregarRolAUsuario', 'Admin\RolesController@agregarRolAUsuario')->name('roles.agregarRolAUsuario');
  Route::delete('roles/usuario', 'Admin\RolesController@quitarRolAUsuario')->name('roles.quitarRolAUsuario');
  Route::get('roles/usuariosConRol/{role}', 'Admin\RolesController@usuariosConRol')->where('role', '[0-9]+')->name('roles.usuariosConRol');

  Route::view('logs', 'admin.logs')->name('logs');
  Route::post('logs', 'Admin\LogsController@index')->name('logs.index');
});// /group prefix=>admin
Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');
Route::get('/paypal/process/{orderId}', 'PayPalCardController@process')->name('paypal.process');
Route::get('/results', 'TestController@index')->name('results');