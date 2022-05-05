<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<section>
  <h1>{{$analise->titulo}}</h1>
  <div class="content2">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, laborum suscipit doloremque, expedita voluptatum maiores corporis modi assumenda esse consectetur error nulla, vero alias.</p>
  </div>
  <div class="img2"><img src="{{ asset('storage/images/'.$analise->file_path) }}"></div>
</section>





<body>

<br>
<br>
<br>
<br>
<br>

<div>
    <h1>Comentários</h1><br><br>
    <form action="/salvar_comentario/{{$id}}" method="post">
        @csrf
        <label class="xxx">Seu nome: </label><input name="nome" type="text"><br><br>
        <label class="xxx">Seu email: </label><input name="email" type="text"><br><br>
        <label class="xxx">Comentário: </label><br><textarea name="mensagem" rows="4" cols="50"></textarea><br><br>
        <button type="submit">Postar</button>    
    </form>
</div>


@foreach ($comentarios as $comentario)
            
    <h1>{{ $comentario->nome }}</h1>
    Mensagem: <br><br>
    {{ $comentario->mensagem }} <br>
    

@endforeach

</body>
</html>