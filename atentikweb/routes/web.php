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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});




Route::get('/dashboardtotal', function () {
    return view('dashboardtotal');
});


Route::get('/dashboardgrafik', function () {
    return view('dashboardgrafik');
});

Route::get('/dashboardtabel', function () {
    return view('dashboardtabel');
	
});

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('/behaviourmahasiswa', function () {
    return view('behaviourmahasiswa');
});

Route::get('/behaviourdosen', function () {
    return view('behaviourdosen');
});

Route::get('/broadcastmessage', function () {
    return view('broadcastmessage');
});

Route::get('/jadwalkuliah', function () {
    return view('jadwalkuliah');
});

Route::get('/datamahasiswa', function () {
    return view('datamahasiswa');
});


Route::get('/datadosen', function () {
    return view('datadosen');
});

Route::get('/dataadmin', function () {
    return view('dataadmin');
});

Route::get('/hasilpencarian', function () {
    return view('hasilpencarian');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/login3', function () {
    return view('login3');
});

Route::get('/absensi', function () {
    return view('absensi');
});



Route::get('/trackingmahasiswa', function () {
    return view('trackingmahasiswa');
});

Route::get('/broadcastmessage', function () {
    return view('broadcastmessage');
});

Route::get('/jadwalkuliah', function () {
    return view('jadwalkuliah');
});

Route::get('/tracking2', function () {
    return view('dashboard/tracking');
});

Route::get('/coba', function () {
    return view('coba');
});
