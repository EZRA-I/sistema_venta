<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\Detail_billController;






Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//CATEGORY

//Muestra una tabla con todos los category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

//Muestra un formulario para crear un category
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

//Recibe los datos del formulario para crear una category
Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.create');

//Muestra un formulario para editar un category
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');

//Recibe los datos del formulario para editar un category
Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])->name('categories.edit');

//Elimina un category por el id
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

//Employee

//Muestra una tabla con todas los empleados
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

//Muestra un formulario para crear un empleado
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

//Recibe los datos del formulario para crear un empleado
Route::post('/employees/create', [EmployeeController::class, 'store'])->name('employees.create');

//Muestra un formulario para editar un empleado
Route::get('/employees/edit/{employee}', [EmployeeController::class, 'edit'])->name('employees.edit');

//Recibe los datos del formulario para editar un empleado
Route::post('/employees/edit/{employee}', [EmployeeController::class, 'update'])->name('employees.edit');

//Elimina un empleado por el id
Route::post('/employees/delete/{employee}', [EmployeeController::class, 'destroy'])->name('employees.delete');


//Customers

//Muestra una tabla con todas los empleados
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

//Muestra un formulario para crear un empleado
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');

//Recibe los datos del formulario para crear un empleado
Route::post('/customers/create', [CustomerController::class, 'store'])->name('customers.create');

//Muestra un formulario para editar un empleado
Route::get('/customers/edit/{customer}', [CustomerController::class, 'edit'])->name('customers.edit');

//Recibe los datos del formulario para editar un empleado
Route::post('/customers/edit/{customer}', [CustomerController::class, 'update'])->name('customers.edit');

//Elimina un empleado por el id
Route::post('/customers/delete/{customer}', [CustomerController::class, 'destroy'])->name('customers.delete');

//Providers

//Muestra una tabla con todas los provider
Route::get('/providers', [ProviderController::class, 'index'])->name('providers.index');

//Muestra un formulario para crear un provider
Route::get('/providers/create', [ProviderController::class, 'create'])->name('providers.create');

//Recibe los datos del formulario para crear un provider
Route::post('/providers/create', [ProviderController::class, 'store'])->name('providers.create');

//Muestra un formulario para editar un provider
Route::get('/providers/edit/{provider}', [ProviderController::class, 'edit'])->name('providers.edit');

//Recibe los datos del formulario para editar un provider
Route::post('/providers/edit/{provider}', [ProviderController::class, 'update'])->name('providers.edit');

//Elimina un provider por el id
Route::post('/providers/delete/{provider}', [ProviderController::class, 'destroy'])->name('providers.delete');



//Bill

//Muestra una tabla con todas la bill
Route::get('/bills', [BillController::class, 'index'])->name('bills.index');

//Muestra un formulario para crear un bill
Route::get('/bills/create', [BillController::class, 'create'])->name('bills.create');

//Recibe los datos del formulario para crear un bill
Route::post('/bills/create', [BillController::class, 'store'])->name('bills.create');

//Muestra un formulario para editar un bill
Route::get('/bills/edit/{bill}', [BillController::class, 'edit'])->name('bills.edit');

//Recibe los datos del formulario para editar un bill
Route::post('/bills/edit/{bill}', [BillController::class, 'update'])->name('bills.edit');

//Elimina un bill por el id
Route::post('/bills/delete/{bill}', [BillController::class, 'destroy'])->name('bills.delete');



//Detail_billController

//Muestra una tabla con todas la detail_bill
Route::get('/detail_bills', [Detail_billController::class, 'index'])->name('detail_bills.index');

//Muestra un formulario para crear un detail_bill
Route::get('/detail_bills/create', [Detail_billController::class, 'create'])->name('detail_bills.create');

//Recibe los datos del formulario para crear un detail_bill
Route::post('/detail_bills/create', [Detail_billController::class, 'store'])->name('detail_bills.create');

//Muestra un formulario para editar un detail_bill
Route::get('/detail_bills/edit/{detail_bill}', [Detail_billController::class, 'edit'])->name('detail_bills.edit');

//Recibe los datos del formulario para editar un detail_bill
Route::post('/detail_bills/edit/{detail_bill}', [Detail_billController::class, 'update'])->name('detail_bills.edit');

//Elimina un detail_bill por el id
Route::post('/detail_bills/delete/{detail_bill}', [Detail_billController::class, 'destroy'])->name('detail_bills.delete');


Route::get('/', function () {
    return view('welcome');
});
