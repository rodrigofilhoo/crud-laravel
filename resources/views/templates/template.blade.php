<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/mystyles.sass') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Painel Funcionários</title>
</head>

<body>
    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                Painel de Funcionários
            </p>
            <p class="subtitle">
                CRUD Fucionários
            </p>
        </div>
        <div class="hero-foot">
            <nav class="tabs is-boxed is-fullwidth">
                <div class="container">
                    <ul>
                        <li class="">
                            <a href="funcionarios/create">Cadastrar</a>
                        </li>
                        <li>
                            <a href="/funcionarios">Listar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    </section>

    @yield('content')
</body>

</html>
