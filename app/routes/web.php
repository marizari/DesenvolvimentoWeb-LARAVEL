<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
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

//Rota com parâmetros obrigatórios
//No caso abaixo, o id e a cat são parâmetros obrigatórios
//Se ambos e/ou não forem passados, dará erro
Route::get('/produto/{id}/{cat}', function($id,$cat){
return "O id do produto é ".$id."<br>"."E a categoria é: ".$cat;

});

//Rota com parâmetros opcionais
//O ? 
Route::get('/produto2/{id}/{cat?}', function($id, $cat=''){
    return "O id do produto é ".$id."<br>"."E a categoria é: ".$cat;

});


/*Route::get('/empresa', function(){
    return view('site.empresa');
});*/

//Rota mais simplificada para rota que somente está renderizando a view
/*Route::view('/empresa', 'site/empresa');


//Rota de redirecionamento de rotas
Route::get('/sobre', function(){
    return redirect('/empresa');
});

//Rota mais simples de redirecionamento de rotas
Route::redirect('/sobre', '/empresa');


//Criação de rotas nomeadas
Route::get('/news', function(){
    return view('news');
})->name('noticias');

//Utilizando o nome da rota declara acima (noticias), SOMENTE SE FOI USADO O ->name('algumNomeDadoARota')
Route::get('/novidades', function(){
    return redirect()->route('noticias');
});*/

// Grupo de Rotas - Uso de prefix
// O método prefix() permite agrupar várias rotas que compartilham um mesmo prefixo na URL.
// Assim, todas as rotas dentro desse grupo terão automaticamente "admin/" antes do seu caminho.
// Exemplo:
// - /admin/dashboard
// - /admin/users
// - /admin/clientes
//
// Isso ajuda a manter o código mais organizado, especialmente em áreas como painéis administrativos.

/*Route::prefix('admin')->group(function(){
    Route::get('dashboard', function(){
        return "dashboard";
    });

    Route::get('users', function(){
        return "users";
    });

    Route::get('clientes', function(){
        return "clientes";
    });
});*/


