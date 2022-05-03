<h1>{{ $analise->titulo }}</h1>



Tipo: {{ $analise->nome }} <br>
Nota: {{ $analise->nota }}<br>
Analise: {{ $analise->analise }}


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1>*****Novo Comentário*****</h1><br><br>
<form action="/salvar_comentario/{{$id}}" method="post">
    @csrf
    Seu nome: <input name="nome" type="text"><br><br>
    Seu email: <input name="email" type="text"><br><br>
    Comentário: <br><textarea name="mensagem" rows="4" cols="50"></textarea><br><br>
    <button type="submit">Postar</button>    
</form>

<br>
<br>
<br>
<br>
<br>

<h1>*****Comentários*****</h1><br>



@foreach ($comentarios as $comentario)
            
    <h1>{{ $comentario->nome }}</h1>
    E-mail: {{ $comentario->email }} <br>
    Mensagem: <br><br> 
    {{ $comentario->mensagem }} <br><br>
    ------------------------------------------------

@endforeach

