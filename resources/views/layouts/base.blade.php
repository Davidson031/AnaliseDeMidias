<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>


    <body>

        <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
        <div class="p-4 pt-5">
        <a href="/dashboard" class="img logo rounded-circle mb-5" style="background-image: url(https://w7.pngwing.com/pngs/831/88/png-transparent-user-profile-computer-icons-user-interface-mystique-miscellaneous-user-interface-design-smile.png);"></a>
        
        
        <div id="mensagem_ola">Olá, {{$user}}</div> 

                


        <br><br>          
        <ul class="list-unstyled components mb-5">      
        <li>
        <a href="/">Principal</a>
        </li>
        <li>
        <a href="/filmes">Filmes</a>
        </li>
        <li>
        <a href="/series">Series</a>
        </li>
        <li>
        <a href="/animes">Animes</a>
        </li>
        </ul>

        </div>
        </nav>


        <br><br>

        @yield('conteudo')


        <div class="footer">
            <a href="/criar"><p>Registrar nova análise</p></a>
        </div>

        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>