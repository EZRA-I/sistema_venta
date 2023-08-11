<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;






Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//CATEGORY

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.create');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])->name('categories.edit');
Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');

//PRODUCT

//Muestra una tabla con todos los productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

//Muestra un formulario para crear un
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

//Recibe los datos del formulario para crear un
Route::post('/products/create', [ProductController::class, 'store'])->name('products.create');

//Muestra un formulario para editar un producto
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');

//Recibe los datos del formulario para editar un producto
Route::post('/products/edit/{product}', [ProductController::class, 'update'])->name('products.edit');
//Elimina un producto por el id
Route::post('/products/delete/{product}', [ProductController::class, 'destroy'])->name('products.delete');

//DEPARTMENT

//Muestra una tabla con todos los departamentos
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');

//Muestra un formulario para crear un departamento
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');

//Recibe los datos del formulario para crear un departamento
Route::post('/departments/create', [DepartmentController::class, 'store'])->name('departments.create');

//Muestra un formulario para editar un departamento
Route::get('/departments/edit/{department}', [DepartmentController::class, 'edit'])->name('departments.edit');

//Recibe los datos dek formulario para editar un departamento
Route::post('/departments/edit/{department}', [DepartmentController::class, 'update'])->name('departments.edit');

//Elimina una departmento por el id
Route::post('/departments/delete/{department}', [DepartmentController::class, 'destroy'])->name('departments.delete');


//CIUDAD

//Muestra una tabla con todas las ciudades
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');

//Muestra un formulario para crear una ciudad
Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');

//Recibe los datos del formulario para crear una ciudad
Route::post('/cities/create', [CityController::class, 'store'])->name('cities.create');

//Muestra un formulario para editar una ciudad
Route::get('/cities/edit/{city}', [CityController::class, 'edit'])->name('cities.edit');

//Recibe los datos dek formulario para editar una ciudad
Route::post('/cities/edit/{city}', [CityController::class, 'update'])->name('cities.edit');

//Elimina una ciudad por el id
Route::post('/cities/delete/{city}', [CityController::class, 'destroy'])->name('cities.delete');

Route::get('/', function () {
    return view('welcome');
});
