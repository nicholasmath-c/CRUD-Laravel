@extends('templates.template')

@section('content')
    <h1 class="text-center">
        @if (isset($book))
            Editar
        @else
            Cadastrar
        @endif
    </h1>
    <hr>
    <div class="col-8 m-auto">
        @if (isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        @if (isset($book))
            <form name="frmEdit" id="frmEdit" method="POST" action="{{ url("books/$book->id") }}">
                @method('PUT')
        @else
            <form name="frmCad" id="frmCad" method="POST" action="{{ url('books') }}">
        @endif
        @csrf
        <input class="form-control mb-3" type="text" name="titulo" id="titulo" value="{{ $book->titulo ?? '' }}"
            placeholder="Título" required>
        <select class="form-control mb-3" name="id_user" id="id_user" required>
            <option value="{{ $book->relUsers->id ?? '' }}">{{ $book->relUsers->name ?? 'Autor' }}</option>
            @foreach ($user as $users)
                @if (!isset($book))
                    <option value="{{ $users->id }}">{{ $users->name }}</option>
                @elseif (!($book->relUsers->id === $users->id))
                    <option value="{{ $users->id }}">{{ $users->name }}</option>
                @endif
            @endforeach
        </select>
        <input class="form-control  mb-3" type="text" name="pages" id="pages" placeholder="Páginas"
            value="{{ $book->pages ?? '' }}" required>
        <input class="form-control mb-3" type="text" name="price" id="price" placeholder="Preço"
            value="{{ $book->price ?? '' }}" required>
        <input class="btn btn-primary" type="submit"
            value="@if (isset($book)) Editar @else Cadastrar @endif" required>
        </form>
    </div>
@endsection
