<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">S.PDF</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                @guest
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login.index') }}">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="{{ route('register.index') }}">Registrar-se</a>
                        </li>
                    </ul>
                @endguest
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('companies.create') }}">Cadastrar Empresa</a>
                        </li>
                    </ul>
                    <div class="dropdown ml-3">
                        <a class="dropdown-toggle text-white" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $loggedUser->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('users.edit', ['user' => $loggedUser->id]) }}">Perfil</a>
                            <a class="dropdown-item text-danger" href="{{ route('login.logout') }}">Sair</a>
                        </div>
                    </div>
                @endauth
        </div>
    </nav>
</header>