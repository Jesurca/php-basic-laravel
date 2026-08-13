<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-path', function () {

    // VARIABLES
    $fullName = "Jesús Urbiñez";
    $age = 20;
    $isLogin = true;
    $height = 1.86;

    echo "<h1>Hola como esta, mi nombre es $fullName </h1>";
    echo "<p>Tengo $age años.</p>";

    // Arreglos 
    $names = [
        "Santiago",
        "Gabriela",
        "Jaime",
        "Jesus"
    ];

    $jesus = [
        "name" => "Jesus",
        "age" => 20, 
        "gender" => "male",
        "hobbies" => [
            "MMA",
            "Motocycles",
            "Ingeniería"
        ]
    ];

    foreach ($names as $item) {
        echo "$item <br>";
    }

    function validateAge($userAge) {
        if ($userAge >= 18) {
            return "Soy mayor de edad<br>";
        } else {
            return "Soy menorsito <br>";
        }
    }

    echo validateAge($age);

    return '<br>Hola mundo';
});