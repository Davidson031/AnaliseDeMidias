@extends('layouts.base')


@section('conteudo')


<div class="content_cadastro">
    <div class="container_cadastro">
        <h1 class="titulo">Fazer Analise</h1>

        <form action={{ route('criar') }} method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-25">
                <label id="fname">Titulo: </label>
                </div>
                <div class="col-75">
                <input name="titulo" type="text">
                </div>
            </div>
            

            <br>

            <div class="row">
                <div class="col-25">
                <label id="fname">Tipo:</label>
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
                <label id="fname">Nota:</label>
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
                <label id="fname">Analise:</label>
            </div>


            <div class="col-75">
            <textarea id="subject" name="analise" placeholder="Escreva aqui sua analise.." style="height:200px"></textarea>
            </div>
            </div>
            <br>
            <div class="row">
                <div class="col-25">
                <label id="fname">Capa: </label>
                </div>
                <div class="col-75">
                <input type="file" name="file" required value>
                </div>
            </div>
            <br>
            
            <input type="submit" value="Enviar">
            
        </form>
    </div>
</div>

@endsection


