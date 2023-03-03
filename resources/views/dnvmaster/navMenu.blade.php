<div class="header__middle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__middle-inner">
                    <div class="header__middle-left">
                        <div class="logo">
                            <a href="{{ url('/') }}" class="logo--normal">
                                <img src="{{ asset(env('DNVMASTER')) }}/img/logo/DnvMaster.png" alt="DnvMaster">
                            </a>
                        </div>
                    </div>
                    <div class="header__middle-center">
                        @if($navMenu)
                        <nav class="main-navigation text-center d-none d-lg-block">
                            @include(env('DNVMASTER').'.menuItems',['items'=>$navMenu->roots()])
                        </nav>
                        @endif
                    </div>
                    <div class="header__middle-right">
                        <div class="site-info--wrapper d-none d-lg-block">
                            <div class="site-info">
                                <div class="site-info__item">
                                    <button type="button" class="btn btn-outline-success">Поиск мастера</button>
                                </div>
                            </div>
                        </div>
                        <div class="header-toolbar-wrap d-block d-lg-none">
                            <div class="header-toolbar">
                                <a href="#offcanvasMenu" class="header-toolbar__btn toolbar-btn menu-btn">
                                    <div class="hamburger-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
