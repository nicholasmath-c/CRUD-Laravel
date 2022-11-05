@extends('templates.template')

@section('content')
    <h1 class="text-center">Create</h1>
    <hr>
    <div class="col-8 m-auto">
        <form name="frmCad" id="frmCad" method="post" action="{{url('books')}}">
            @csrf
            <input class="form-control mb-3" type="text" name="titulo" id="titulo" placeholder="Título">
            <select class="form-control mb-3" name="id_user" id="id_user">
                <option value="">Autor</option>
                @foreach ($user as $users)
                  <option value="{{$users->id}}">{{$users->name}}</option>
                @endforeach
            </select>
            <input class="form-control  mb-3" type="text" name="pages" id="pages" placeholder="Páginas">
            <input class="form-control mb-3" type="text" name="price" id="price" placeholder="Preço">
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection
