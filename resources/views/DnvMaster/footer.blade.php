@php
    $date = date('d.m.Y');
    $year = date('Y');
@endphp

<footer>
    <div class="footer">
        <div class="container">
            <div class="row g-0">
                <!-- Start Column 1 -->
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="footer-col">
                        <img src="{{ asset('DnvMaster/images/logo/DnvMaster-1.png') }}" alt="DnvMaster">
                        <div class="footer-text-content mt-25">
                            <p>DnvMaster - {{ trans('ru.title_footer') }}</p>
                            <div class="mt-20">
                                <p><i class="fa fa-clock-o"></i> {{ $date }}</p>
                                <p><i class="fa fa-phone"></i> +372(29) 5-82-82-56</p>
                                <p><i class="fa fa-envelope-o"></i> dnvmaster50@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Column 1 -->
                <!-- Start Column 2 -->
                <div class="col-md-3 col-sm-12 col-xs-12 offset-md-1">
                    <div class="footer-col-heading">
                        <h6>{{ trans('ru.recent_posts') }}</h6>
                    </div>

                    <div class="footer-post clearfix">
                        <div class="footer-post-img">
                            <img src="{{ asset('DnvMaster/images/posts/002-360x240.png') }}" alt="Laravel 9">
                        </div>
                        <div class="footer-post-content">
                            <h6><a href="https://laravel.com" target="_blank">{{ trans('ru.fr_laravel') }}</a></h6>
                        </div>
                    </div>

                    <div class="footer-post clearfix">
                        <div class="footer-post-img">
                            <img src="{{ asset('DnvMaster/images/posts/bootstrap.png') }}" alt="Bootstrap 5.3">
                        </div>
                        <div class="footer-post-content">
                            <h6><a href="https://getbootstrap.com" target="_blank">{{ trans('ru.tw_bootstrap') }}</a></h6>
                        </div>
                    </div>

                    <div class="footer-post clearfix">
                        <div class="footer-post-img">
                            <img src="{{ asset('DnvMaster/images/posts/php.png') }}" alt="PHP 8.1">
                        </div>
                        <div class="footer-post-content">
                            <h6><a href="https://getbootstrap.com" target="_blank">{{ trans('ru.php-8') }}</a></h6>
                        </div>
                    </div>

                </div>
                <!-- End Column 2 -->
                <!-- Start Column 3 -->
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="footer-col-menu">
                        <h6>{{ trans('ru.menu') }}</h6>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">{{ __('Главная') }}</a></li>
                        <li><a href="#">{{ __('О нас') }}</a></li>
                        <li><a href="https://getbootstrap.com" target="_blank">{{ __('Ботстрап') }}</a></li>
                        <li><a href="https://laravel.com" target="_blank">{{ __('Ларавел') }}</a></li>
                        <li><a href="#">{{ __('РНР') }}</a></li>
                        <li><a href="#">{{ __('Контакты') }}</a></li>
                    </ul>
                </div>
                <!-- End Column 3 -->
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-right mt-10">
                        <p>© {{ $year }} Copyright <a href="index.html"> &nbsp;DnvMaster&nbsp;</a>. {{ trans('ru.copyright') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-left mt-10">
                        <p>{{ __('Хостинг предоставлен кампанией') }} <a href="https://hyperhost.ua" target="_blank">{{ __('Hyperhost') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
