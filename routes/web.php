<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;



Route::get('/home', function () {
    return view('welcome');
});

//Route::view('/', 'home');
Route::get('/', function (){
    //dd(Produto::all());

    $listaProdutos = Produto::all();

    return view('home', compact('listaProdutos'));
});

Route::view('/cria-conta', 'cria-conta');

Route::view('testedeconteudo', 'teste');

Route::post('/salva-usuario', function (Request $request) {
    // dd($request);

    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
    $usuario->save();
    dd("Salvo com sucesso!💕");

})->name('salva-usuario');


// --------------Produtos----------------
Route::view('/cadastra-produto', 'cadastra-produto')->middleware('auth');

Route::post('/salva-produto',
function (Request $request) {
    //dd($request);
    $produto = new Produto();
    $produto->nome = $request->nome;
    $produto->descricao = $request->descricao;
    $produto->preco = $request->preco;

    //pega o arquivo enviado
    $file = $request->file('foto');
    //salva na pasta fotos, subpasta produtos
    $foto = $file->store('produtos', ['disk' => 'fotos']);

    $produto->foto = $foto;

    $produto->user_id = 1;

    //salva produto no banco
    $produto->save();
    //comentar o DD
    //dd("Salvo com sucesso!!!");
    return redirect('/');

})->name('salva-produto')->middleware('auth');

//--------------------- LOGIN ---------------------------------------
// abre a tela de login
Route::view('/login', 'login')->name('login');

Route::post('logar', function (Request $request) {
    //testar se está recebendo os dados. depois apagar
    //dd($resquest);

    //verifica se a pessoa preencheu os campos de login
    $credentials = $request->validate([
        'email' => ['required', 'email'], //verifica se tem email e se é email
        'senha' => ['required'], //verifica se tem senha
    ]);

    //compara se os dados no banco de dados são iguais o que ele preencheu
    if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
        //cria a sessão do usuário logado
        $request->session()->regenerate();
        //redireciona para a tela de cadastro de produtos
        return redirect()->intended('/cadastra-produto');
    }
    else{
        dd("Usuário ou senha incorretos");
    }
})->name('logar');
Route::get('/sair', function () {
    Auth::logout();
    return redirect('/');
});
