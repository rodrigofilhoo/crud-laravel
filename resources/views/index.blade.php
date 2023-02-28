@extends('templates.template') {{-- pasta.arquivo --}}

@section('content')
    {{-- sessão --}}
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Endereço</th>
                    <th>Estado Civil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionario as $funcionarios)
                    <tr>
                        <th scope="row">{{ $funcionarios->id }}</th>
                        <td>{{ $funcionarios->nome }}</td>
                        <td>{{ $funcionarios->email }}</td>
                        <td>{{ $funcionarios->telefone }}</td>
                        <td>{{ $funcionarios->dtnasc }}</td>
                        <td>{{ $funcionarios->endereco }}</td>
                        <td>{{ $funcionarios->ec }}</td>
                        <td>
                            <a href="">
                                <button class="button is-link"><i class="fa-solid fa-eye"></i></button>
                            </a>
                            <a href="">
                                <button class="button is-warning"><i class="fa-solid fa-pen-to-square"></i>

                                </button>
                            </a>
                            <a href="">
                                <button class="button is-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
    </div>
@endsection
