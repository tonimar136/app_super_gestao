<h3>Fornecedores</h3>

{{-- Comentário Teste blade --}}
{{ 'Teste para echo em blade.php' }}

@php
    //Este bloco é para php puro
@endphp

{{-- Sintaxe print_r blade --}}
{{-- @dd($fornecedores) --}}

{{-- Sintaxe if  blade --}}
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados
    @elseif(count($fornecedores) > 10)
        <h3>Existem vários fornecedores cadastrados</h3>
    @else
        <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
