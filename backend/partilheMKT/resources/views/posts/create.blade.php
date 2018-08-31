@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">CRIAR NOVO POST</div>
                <div class="card-body">
                 	<form method="post" action="{{ route('posts.store') }}">
                 		@csrf
					 	<div class="form-group">
						    <label for="title">Título</label>
						    <input type="text" class="form-control" name="title" id="title" placeholder="Insira o título do artigo aqui...">
						</div>
						<div class="form-group">
						    <label for="pictureThumb">Enviar foto</label>
						    <input type="file" class="form-control-file" id="pictureThumb" aria-describedby="fileHelp" name="pictureThumb">
						    <small id="fileHelp" class="form-text text-muted">Insira uma imagem que nao seja muito pequena senão vai ficar mor feio</small>
					    </div>
						<div class="form-group">
						    <label for="content">Conteúdo</label>
						    <textarea class="form-control" id="content" name="content" rows="8"></textarea>
					    </div>
					    <button type="submit" class="btn btn-primary">Criar Post</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection