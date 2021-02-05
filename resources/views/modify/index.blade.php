@extends('main')

@section('content')

    <div class="container-fluid">
        <div class="row">            
            <section class="col-md-3 info">            
                <h1 class="title">O que é o modifique.me?</h1>
                <p class="paragraph">Utilise a nossa plataforma para modificar o seu texto, com a opções ao lado. Divirta-se!</p>
            </section>
            <section class="col-md-9">
                <form action="{{ route('modify.change') }}" class="form-ajax" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label for="text" class="form-label">Digite aqui o seu texto</label>
                                <textarea class="form-control" id="text" rows="5" name="text" required placeholder="Digite aqui o seu texto"></textarea>
                                <div class="d-grid mt-3">
                                    <button type="submit" class="btn btn-primary">modifique.me!</button>    
                                </div>            
                            </div>
                        </div>
                        <div class="col-md-3 pt-4">                    
                            <input type="radio" class="btn-check" name="type" value="upper" required id="type1" autocomplete="off">
                            <label class="btn btn-outline-primary mb-2 btn-sm" for="type1" title="Converte para maiúsculas o todos os caracteres">MAIÚSCULAS</label>
        
                            <input type="radio" class="btn-check" name="type" value="lower" required id="type2" autocomplete="off">
                            <label class="btn btn-outline-primary mb-2 btn-sm" for="type2" title="Converte para minusculas o todos os caracteres">minúsculas</label>
        
                            <input type="radio" class="btn-check" name="type" value="ucWords" required id="type3" autocomplete="off">
                            <label class="btn btn-outline-primary mb-2 btn-sm" for="type3" title="Converte para maiúsculas o primeiro caractere de cada palavra">Maiúsculas Em Cada Palavra</label>
        
                            <input type="radio" class="btn-check" name="type" value="ucFirst" required id="type4" autocomplete="off">
                            <label class="btn btn-outline-primary mb-2 btn-sm" for="type4" title="Converte para maiúscula o primeiro caractere de um texto">Primeira maiúscula do texto</label>
                        </div>
                    </div>            
                </form>
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="response-ajax mt-2"></div>
                    </div>
                </div>
            </section>
        </div>              
    </div>

    
@endsection