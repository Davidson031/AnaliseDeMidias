<html>
    <head>
        <title>Tela de Analises</title>
    </head>
    <body>

        <ul>
            <li> <a href="/">Todos</a> <a href="/filmes">Filmes</a> <a href="/series">Séries</a> <a href="/animes">Animes</a> <a href="/criar">Registrar Analise</a></li>         
        </ul>
  
         

        @foreach ($analises as $analise)
            
            <h1>{{ $analise->titulo }}</h1>
            <a href="/analise/{{ $analise->id }}"><img src={{ asset('thumbnails/twd.jpg') }} alt="Logo"></a>        
            <br><br> 
                   
        @endforeach

    </body>

    
</html>


