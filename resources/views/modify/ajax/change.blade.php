@php
    $id = date('hisu');
@endphp
<div class="card mb-3">
    <div class="card-body">
        <p class="text-end">
            <button class="btn btn-primary btn-sm btn-copy" data-clipboard-text="{!! nl2br($text) !!}">copiar</button>
        </p>        
        <p class="card-text">{!! nl2br($text) !!}</p>
    </div>
</div>