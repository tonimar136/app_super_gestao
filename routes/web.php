<?php

use Illuminate\Support\Facades\Route;

#AQUI CHAMAMOS OS CONTROLLERS
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

#AQUI CHAMAMOS AS ROTAS
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){echo 'login';})->name('site.login');

#ROTA COM PREFIXO 'APP'
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){echo 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){echo 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');





/*







#REDIRECIONAMENTO--------------------------
Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

#REDIRECT DE ROTA 2 PARA ROTA 1
#Route::redirect('/rota2', 'rota1');

#FALLBACK -> UMA ROTA 404 NÃO PADRÃO
Route::fallback(function() {
    echo 'A rota acessada não existe, clique <a href="'.route('site.index').'">aqui</a> para ir a página inicial';
});

#ROTAS PASSANDO PARAMETROS
/*Route::get(
    '/contato/{nome}/{categ_id}',
    function(
        string $nome,
        int $categ_id = 1){
    echo "Seu nome é: $nome <br>
          Categoria: $categ_id <br>
        ";}
)->where('categ_id', '[0-9]+')->where('nome', '[A-Za-z]+');
*/
