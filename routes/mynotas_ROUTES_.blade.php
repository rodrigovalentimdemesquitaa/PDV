{{--
PRECISO ATUALIZAR MEU LARAVEL
---------------------------------------------------------------------------------
ROUTES
    - url amigável;
    - ao receber uma requisição em uma determinada URL o sistema de rotas
      define o que fazer, como por exemplo redirecionar ou enviar para o
      controlador (Controller) decidir o que fazer.
---------------------------------------------------------------------------------
sintaxe
    Route::prefix(prefix: 'usuarios')->groud(function(){

        Route::get(uri: '/edit', function(){
            return 'usuarios';
        })
        Route::get(uri: '/{id}', function(){
            return 'Mostrar detalhes';
        })->name(name: 'usuarios.show);
    }

definição:
    - Route == class
    - ::get == método
    - uri: '/' == 1º parâmetro(onde entra o string da rota)
    - function() == 2º parâmetro(entrada da função)
    - return == saída da função
    - group == método usado quando se tem o mesmo prefixo: 'usuarios', neste caso, para várias url
    - prefix == endereço que será repetido
    - ->name(name: 'usuarios.show) == método para url amigável(nomes nas rotas)

---------------------------------------------------------------------------------

---------------------------------------------------------------------------------









--}}


