<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//o que faz o rota any é aceitar qualquer tipo de requisição. No caso abaixo, aceita put, delete, get, post. Não é muito usado. por questões de segurança
Route::any('/any', function(){
    return "Pemite todo tipo de acesso http(put, delete, get, post))";

});

//o que faz o rota match é aceitar apenas os tipos de requisição que forem definidos. No caso abaixo, aceita apenas get e post
Route::match(['get', 'post'], '/match', function(){
    return "Permite apenas get e post,
    ou seja, permite SOMENTE métodos definidos como foi no caso do verbo http get e post";
// permite apenas os métodos definidos
});

Route::get('/produto/{id}/{cat}', function($id,$cat){
return "O id do produto é ".$id."<br>"."A categoria do produto é ".$cat;

});


Route::get('/empresa', function(){
    return view('site.empresa');

});
