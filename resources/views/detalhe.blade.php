@extends('layouts.base')


@section('conteudo')

 <div class="stars">

  @for($i = 0; $i < $analise->nota; $i++)
    <i class="material-icons" id="stars">star</i>
  @endfor

  @if($analise->nota < 5)
    @for($i=1; $i <= (5-$analise->nota); $i++)
      <i class="material-icons" id="stars">star_outline</i>
    @endfor
  @endif
      
</div>


<section>
  <h1>{{$analise->titulo}}</h1>
  <div class="content2">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, laborum suscipit doloremque, expedita voluptatum maiores corporis modi assumenda esse consectetur error nulla, vero alias.</p>
  </div>
  <div class="img2"><img src="{{ asset('storage/images/'.$analise->file_path) }}"></div>
</section>

<br>
<br>
<br>
<br>
<br>

<div class="comentarios">
    <h1>Comentários</h1><br><br>
    <form action="/salvar_comentario/{{$id}}" method="post">
        @csrf
        <label class="xxx">Seu nome: </label><input name="nome" type="text"><br><br>
        <label class="xxx">Seu email: </label><input name="email" type="text"><br><br>
        <label class="xxx">Comentário: </label><br><textarea name="mensagem" rows="4" cols="50"></textarea><br><br>

        <button type="submit" class="btn btn-primary">Postar</button>
    </form>


@foreach ($comentarios as $comentario)
          
  <form action="/atualizarcomentario/{{$comentario->id}}" method="post">
    @csrf
    <h1>{{ $comentario->nome }}</h1>
    Mensagem: <br><br>
    <textarea id="comentario" name="comentario"@if($user=='Visitante')disabled @endif>{{ $comentario->mensagem }} </textarea>
    <br><br>

  <p class = "barra-comentario">
  
    @if($user!='Visitante')
      <button type="submit"> <i class="material-icons">save</i></button>
      <a href="/deletarcomentario/{{$comentario->id}}"><button type="button"> <i class="material-icons">delete</i></button></a>
  </form>
    @endif

  </p>
  
@endforeach

</div>

@endsection



   
