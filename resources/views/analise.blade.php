<html>
    <head>
        <title>Cadastro de Analise</title>
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

        {{--
        <div class="content">
            <form action={{ route('criar') }} method="post" enctype="multipart/form-data">
            @csrf

            Titulo da midia: <input name="titulo" type="text"><br><br>
            Analise: <br><textarea name="analise" rows="4" cols="50"></textarea><br><br>

            Tipo:
            <select name="tipo_midias_id">

                @foreach ($tipos as $tipo)
            
                    <option value="{{ $tipo->id }}"> {{ $tipo->nome }} </option>
           
                 @endforeach

            </select>

            Nota:   <select name="nota">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
        <br><br>
        Capa: <input type="file" name="file" required>
        <br><br>
        <button type="submit">Cadastrar</button>
    
        </form>
        </div> --}}
        <div class="content">
            <div class="container">
                <h1 class="titulo">Cadastro de Mídia</h1>
        
                <form action={{ route('criar') }} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-25">
                        <label for="fname">Titulo: </label>
                        </div>
                        <div class="col-75">
                        <input name="titulo" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                        <label for="lname">Tipo</label>
                    </div>
                        <div class="col-75">
                            <select name="tipo_midias_id">

                                    
                                @foreach ($tipos as $tipo)

                                    <option value="{{ $tipo->id }}"> {{ $tipo->nome }} </option>
                        
                                @endforeach

                            </select>

                    
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="country">Nota</label>
                    </div>
                    <div class="col-75">
                    <select name="nota">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-25">
                    <label for="subject">Analise</label>
                    </div>
                    <div class="col-75">
                    <textarea id="subject" name="analise" placeholder="Escreva aqui sua analise.." style="height:200px"></textarea>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="fname">Capa: </label>
                        </div>
                        <div class="col-75">
                        <input type="file" name="file" required value>
                        </div>
                    </div>
                    <br>
                    
                    <input type="submit" value="Submit">
                    
                </form>
            </div>
        </div>


    

</body>
    
    
</html>



