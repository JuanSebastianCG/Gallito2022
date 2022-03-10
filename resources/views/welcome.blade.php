

@extends('layouts.app')

@section('content')

<div class="container">
    <h4>¡Bienvenidos!</h4>
    <h4>Estos son los usuarios registrados en la plataforma: </h4>

    <ul class="list-group">

    @forelse($users as $user)
    <ul class="collection">
    <li class="collection-item ">
      <!--  <img src="images/yuna.jpg" alt="" class="circle">-->
            <a href="{{ route('u.index',$user->id)}}" class="">
                <span class="title" style="color:black;"><h5>{{ $user->name }}</h5></span>
            </a>

      <p>{{ $user->email }} <br>
      </p>
     <!--  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
    </li>


  </ul>
    @empty
        <div class="alert alert-info" role="alert">
                No hay usuarios
        </div>
    @endforelse
    </ul>
</div>
@endsection
