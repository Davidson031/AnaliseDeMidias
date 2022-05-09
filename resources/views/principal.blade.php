@extends('layouts.base')


@section('conteudo')

<div class="grid">
    @foreach ($analises as $analise)

        <div class="quadrado"> 

        <grid-item><a href="/analise/{{ $analise->id }}"><img src="{{ asset('storage/images/'.$analise->file_path) }}" class="img" alt="Logo"></a> </grid-item>   
        </div>
                
    @endforeach
</div>

@endsection

    

    



