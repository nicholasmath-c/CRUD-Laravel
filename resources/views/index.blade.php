@extends('templates.template')

@section('content')
    <h1 class="text-center">Crud</h1>
    <hr>

    <div class="text-center mt-3 mb-4">
        <a href="">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table table-striped text-center">
            <thead>
              <tr class="table-dark">
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($book as $books)
                  @php
                    $user=$books->find($books->id)->relUsers;
                  @endphp
                    <tr>
                        <th scope="row">{{$books->id}}</th>
                        <td>{{$books->titulo}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$books->price}}</td>
                        <td>
                            <a href="">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
