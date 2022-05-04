<html>
    <head>
        <title>Tela de Analises</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>

        <div class="sidenav">
            <side-nav-item><a href="/">Tudo</a></side-nav-item>
            <a href="/filmes">Filmes</a>
            <a href="/series">Séries</a>
            <a href="/animes">Animes</a>
        </div>

        <div class="main">
        </div>

        <div class="grid">
        @foreach ($analises as $analise)

            <div> 
            <grid-item><h1>{{ $analise->titulo }}</h1></grid-item> 
            <grid-item><a href="/analise/{{ $analise->id }}"><img src="{{ asset('storage/images/'.$analise->file_path) }}" class="img" alt="Logo"></a> </grid-item>   
            <br><br> 
            </div>
                   
        @endforeach
        </div>


    <div class="footer">
        <a href="/criar"><p>Registrar nova análise</p></a>
    </div>
    </body>

    
</html>



