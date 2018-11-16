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


Route::get('/prime' , function(){
    for ($i=1;$i<=100;$i++)
    {
        for($j=2;$j<$i;$j++){

            if($i % $j != 0 && $i != $j){
                $prime[] = $i;
            }
        }

    }
    return $prime;

});