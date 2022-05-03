<html>
    <head>
        <title>Cadastro de Analise</title>
    </head>
    <body>

    <ul>
        <li><a href="/">Principal</a></li>
        <li><a href="/criar">Registrar Analise</a></li>  
    </ul>

    <br>
    <h1>Cadastro de análises</h1>
    <br>

    <form action={{ route('criar') }} method="post">
        @csrf

        Titulo da midia: <input name="titulo" type="text"><br><br>
        Analise: <br><textarea name="analise" rows="4" cols="50"></textarea><br><br>

        Tipo:
        <select name="tipo_midias_id">

           @foreach ($tipos as $tipo)
            
                    <option value="{{ $tipo->id }}"> {{ $tipo->nome }} </option>
           
                @endforeach

        </select>

        <br><br>



        Nota:   <select name="nota">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
        <br><br>
        <button type="submit">Cadastrar</button>
    
    </form>

</body>
    
    
</html>



