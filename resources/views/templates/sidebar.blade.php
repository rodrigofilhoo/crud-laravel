<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/mystyles.sass') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item">
                        Website
                    </a>
                </div>
                <label for="menu-toggle" class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <input type="checkbox" id="menu-toggle" class="is-hidden" />
                <div class="nav-right nav-menu">
                    <a class="nav-item is-tab is-hidden-tablet">
                        <span class="icon"><i class="fa fa-home"></i></span> Home
                    </a>
                    <a class="nav-item is-tab is-hidden-tablet">
                        <span class="icon"><i class="fa fa-table"></i></span> Links
                    </a>
                    <a class="nav-item is-tab is-hidden-tablet">
                        <span class="icon"><i class="fa fa-info"></i></span> About
                    </a>

                    <a class="nav-item is-tab is-active">
                        <span class="icon"><i class="fa fa-user"></i></span>
                    </a>
                    <a class="nav-item is-tab">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                    </a>
                </div>
            </div>
        </nav>

        <section class="main-content columns is-fullheight">

            <aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
                <p class="menu-label is-hidden-touch">Navigation</p>
                <ul class="menu-list">
                    <li>
                        <a href="#" class="is-active">
                            <span class="icon"><i class="fa fa-home"></i></span> Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="icon"><i class="fa fa-table"></i></span> Links
                        </a>

                        <ul>
                            <li>
                                <a href="#">
                                    <span class="icon is-small"><i class="fa fa-link"></i></span> Link1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon is-small"><i class="fa fa-link"></i></span> Link2
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="icon"><i class="fa fa-info"></i></span> About
                        </a>
                    </li>
                </ul>
            </aside>

            <div class="container column is-10">
                <div class="section">

                    <div class="card">
                        <div class="card-header">
                            <p class="card-header-title">Header</p>
                        </div>
                        <div class="card-content">
                            <div class="content">Content</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Header</p>
                        </div>
                        <div class="card-content">
                            <div class="content">Content</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Header</p>
                        </div>
                        <div class="card-content">
                            <div class="content">Content</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Header</p>
                        </div>
                        <div class="card-content">
                            <div class="content">Content</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Header</p>
                        </div>
                        <div class="card-content">
                            <div class="content">Content</div>
                        </div>
                    </div>
                    <br />

                    <div class="card is-hidden1">
                        <div class="card-header">
                            <p class="card-header-title">Header</p>
                        </div>
                        <div class="card-content">
                            <div class="content">Content</div>
                        </div>
                    </div>
                    <br />

                </div>
            </div>

        </section>

        <footer class="footer is-hidden">
            <div class="container">
                <div class="content has-text-centered">
                    <p>Hello</p>
                </div>
            </div>
        </footer>

    </div>
    @yield('sidebar')
</body>

</html>
