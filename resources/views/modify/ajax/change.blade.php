@php
    $id = date('hisu');
@endphp
<div class="card">    
    <div class="card-body">        
        <p class="card-text">{!! nl2br($text) !!}</p>        
        <button class="btn-copy btn" data-clipboard-text="{!! nl2br($text) !!}">copiar</button>        
    </div>
</div>