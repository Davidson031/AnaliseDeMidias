<html>
    <head>
        <title>Tela de Analises</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>

        <div class="sidebar">
        <a class="active" href="/">Home</a>
        <a href="/filmes">Filmes</a>
        <a class="active" href="/series">Séries</a>
        <a href="/animes">Animes</a>
        <a class="active" href="/novelas">Novelas</a>
        </div>


        
        <br><br>
        <div class="grid">
        @foreach ($analises as $analise)

            <div class="quadrado"> 

            <grid-item><a href="/analise/{{ $analise->id }}"><img src="{{ asset('storage/images/'.$analise->file_path) }}" class="img" alt="Logo"></a> </grid-item>   
            </div>
                   
        @endforeach
        </div>


    <div class="footer">
        <a href="/criar"><p>Registrar nova análise</p></a>
    </div>
    </body>
    
</html>



