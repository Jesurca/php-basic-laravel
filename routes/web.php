<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-path', function () {

//VARIABLES

    $name ="Jesús Urbiñez";
    $age = 20;
    $isLogin = true;
    $heigh = 1.86;


 echo "<h1>Hola como esta, mi nombre es $name </h1>";

 echo "<p>Tengo $age años.</p>";

 //Arreglos 

 $name = [
    "Santiago",
     "Gabriela",
      "Jaime",
       "Jesus"];

    $jesus = [
        "name" => "Jesus",
        "age" => 20, 
        "height" => "male",
        "hobbies" => [
            "MMA",
            "Motocycles",
            "Ingeneria"
        ]
    ];
    foreach ($name as $item);{
        echo "$item <br>";
}
function validateAge(){
    if ($age >= 18){
        return "Soy mayor de edad<br>";
        
    }else {
        return "Soy menorsito <br>";
    }
}
    return 'Hola mundo';
});