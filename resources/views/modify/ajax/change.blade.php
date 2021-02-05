@php
    $id = date('hisu');
@endphp
<div class="card mb-3">
    <div class="card-header text-end">
        <button class="btn btn-primary btn-sm btn-copy btn-clipboard" data-clipboard-text="{!! nl2br($text) !!}">copiar</button>
    </div>
    <div class="card-body">
        <p class="card-text">{!! nl2br($text) !!}</p>
    </div>
</div>