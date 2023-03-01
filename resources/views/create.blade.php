@extends('templates.template') {{-- pasta.arquivo --}}

@section('content')
    {{-- sessão --}}
    <div class="container">
        <div class="title title-form has-text-centered has-text-weight-bold mt-5">Cadastrar</div>
        <form action="" method="post" class="mt-5">
            @csrf
            <label for="">Nome:</label>
            <input class="input is-primary" type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            <label for="">Email:</label>
            <input class="input is-primary" type="email" name="email" id="email" placeholder="Digite seu email"
                required>
            <label for="">Telefone:</label>
            <input class="input is-primary" type="number" name="telefone" id="telefone" placeholder="Digite seu telefone"
                required>
            <label for="">Data de nascimento:</label>
            <input class="input is-primary" type="date" name="dtnasc" id="dtnasc" required>
            <label for="">Endereço:</label>
            <input class="input is-primary" type="text" name="endereco" id="endereco" placeholder="Digite seu endereço"
                required>
            <div class="select mt-2 is-primary">
                <select required>
                    <option>Estado Civil</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="separado">Separado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                </select>
            </div> <br>
            <div class="buttons mt-3 is-primary">
                <input class="button is-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>
@endsection
