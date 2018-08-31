@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        	@include('layouts.message_session')
            <div class="card">
                <div class="card-header">Todos seus posts</div>
                <div class="card-body">
                 	@foreach($posts as $post)

                 	<h1>{{$post->title}}</h1>
                 	<h5>{{$post->content}}</h5>
                 	<a href="{{route('posts.edit', $post->id)}}"><button class="btn btn-sm btn-info">Editar</button></a>
                    {!! Form::open(['method' => 'DELETE','route' => ['posts.delete', $post->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Apagar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                 	<hr>

                 	@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection