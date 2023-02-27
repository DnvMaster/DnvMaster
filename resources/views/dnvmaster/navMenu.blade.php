<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset(env('DNVMASTER')) }}/images/logo/DnvMaster.png" alt="DnvMaster"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Главная</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ url('/') }}">О нас</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ url('/') }}">Услуги</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ url('/') }}">Поиск мастера</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ url('/') }}">Контакты</a></li>

            </ul>
        </div>
    </div>
</nav>
