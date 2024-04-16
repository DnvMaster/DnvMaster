<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custom" data-spy="affix" data-offset-top="50">
        <div class="container navbar-header-custom">
            <a class="navbar-logo" href="{{ url('/') }}"><img src="{{ asset('DnvMaster/images/logo/DnvMaster.png') }}" alt="{{ __('DnvMaster') }}"></a>
            <button class="navbar-toggler menu-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-end me-auto mb-2 mb-lg-0 navbar-links-custom">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">{{ __('Главная') }}</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('О нас') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('Статьи') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('Контакты') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
