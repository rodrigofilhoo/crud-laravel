@extends('templates.template') {{-- pasta.arquivo --}}

@section('content')
    <div class="title has-text-centered mt-6">Informações</div>

    <div class="container mt-3">
        <table class="table is-bordered">
            <tr>
                <td>Id:</td>
                <td>{{ $funcionario->id }}</td>
            </tr>
            <tr>
                <td>Nome:</td>
                <td>{{ $funcionario->nome }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{ $funcionario->email }}</td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td>{{ $funcionario->telefone }}</td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td>{{ $funcionario->endereco }}</td>
            </tr>
            <tr>
                <td>Estado Civil:</td>
                <td>{{ $funcionario->ec }}</td>
            </tr>
            <tr>
                <td>Data de Nascimento:</td>
                <td>{{ $funcionario->dtnasc }}</td>
            </tr>
        </table>
    </div>
@endsection
