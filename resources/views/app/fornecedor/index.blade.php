<h3>Fornecedor</h3>

@php

$cont = 0;

@endphp

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)

        @dd($loop)
        Iteração atual:{{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
        <br>
        telefone: ({{ $fornecedor['ddd'] ?? ''}}) ({{ $fornecedor['telefone'] ?? ''}}) 
        <br>
        @if($loop->first)
            Primeira iteração do loop
        @endif

        @if($loop->last)
            ultima iteração do loop
            <br>
            total de registros: 
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!!    
    @endforelse
        
    
    
@endisset