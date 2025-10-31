<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function() {
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => 1],
        ["name" => "luigu", "skill" => 60, "id" => 2],
    ];
    return view('ninjas.index', ["greeting" => "hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/create', function() {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function($id) {
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => 1],
        ["name" => "luigu", "skill" => 60, "id" => 2],
    ];
    return view('ninjas.show', ["id" => $id]);
});