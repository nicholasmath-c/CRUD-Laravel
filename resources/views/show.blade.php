@extends('templates.template')

@section('content')
    <h1 class="text-center">Show</h1>
    <hr>
    <div class="col-8 m-auto">
        @php
            $user=$book->find($book->id)->relUsers;
        @endphp

        Título: {{$book->titulo}} <br>
        Páginas: {{$book->pages}} <br>
        Preço: {{$book->price}} <br>
        Autor: {{$user->name}} <br>
        E-mail do Autor: {{$user->email}}
    </div>
@endsection
