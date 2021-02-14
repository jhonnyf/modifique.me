@extends('main')

@section('publicity-large')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="publicity-large"></section>
            </div>
        </div>
    </div>    
@endsection

@section('about')
    <section class="about">
        <h1 class="title">O que é o modifique.me?</h1>
        <p class="paragraph">Utilize a nossa plataforma para modificar o seu texto, aqui você pode converter seu texto para caracteres maiúsculos, maiúsculos, converter somente o primeiro caractere do texto ou até todos os primeiros caractere do seu texto. Divirta-se!</p>
    </section>
@endsection

@section('content')    
    <section class="actions">
        <form action="{{ route('modify.change') }}" class="form-ajax" method="post" autocomplete="off">
            
            <div class="options">
                <label class="option btn" for="upper" title="Converte para maiúsculas o todos os caracteres">
                    <input type="radio" name="type" value="upper" id="upper" checked required> maiúsculas
                </label>

                <label class="option btn" for="lower" title="Converte para minusculas o todos os caracteres">
                    <input type="radio" name="type" value="lower" id="lower" required> minúsculas
                </label>

                <label class="option btn" for="ucWords" title="Converte para maiúsculas o primeiro caractere de cada palavra">
                    <input type="radio" name="type" value="ucWords" id="ucWords" required> maiúsculas em cada palavra
                </label>

                <label class="option btn" for="ucFirst" title="Converte para maiúscula o primeiro caractere de um texto">
                    <input type="radio" name="type" value="ucFirst" id="ucFirst" required> primeira maiúscula do texto
                </label>
            </div>

            <div class="text-input">
                <textarea name="text" id="text" required placeholder="Digite aqui o seu texto"></textarea>
                <div class="text-info">
                    <div class="characters">
                        Qtd. de caracteres <span>0</span>
                    </div>
                    <div class="words">
                        Qtd. de palavras <span>0</span>
                    </div>
                </div>                     
            </div>

            <div class="text-right">
                <button type="submit" class="submit btn">modifique.me!</button>                      
            </div>
                        
        </form>
        
        <div class="response-ajax"></div>
    </section>
@endsection