@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        	@include('layouts.message_session')
            <div class="card">

               {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
               
			        {{ csrf_field() }}
			        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {!! Form::label('title', 'Nome', ['class'=>'control-label']) !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {!! Form::label('content', 'Conteudo', ['class'=>'control-label']) !!}
                            {!! Form::textarea('content',null,['class'=>'form-control', 'rows' => 8]) !!}
                        </div>
                    </div>
			        
			       <div class="col-xs-12 col-sm-12 col-md-12">
			        <button style="margin-bottom: 5px" type="submit" class="btn btn-primary">Atualizar Post</button>
			    </div>

				{!!  Form::close()  !!}
            </div>
        </div>
    </div>
</div>
@endsection


