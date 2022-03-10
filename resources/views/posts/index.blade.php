@extends('layouts.app')

@section('content')

<div class="container">
    <h4 >Publicaciones de {{ $user->name}}</h4>
        @forelse($posts as $post)
            @include('posts.subview-post')


        @empty
        <div class="card mb-2" >
            <div class="alert alert-info" role="alert">
                El usuario no ha publicado mensajes
            </div>
        </div>
        @endforelse
    <div class="mt-3">
        {{$posts->links()}}
    </div>
</div>

@endsection
