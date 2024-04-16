@php
    $date = date('d.m.Y');
@endphp

<div id="topBar" class="">
    <div class="container">
        <div class="row g-0 text-center">
            <div class="col-sm-6 col-md-8">
                <ul class="top-info-bar">
                    <li><i class="fa fa-clock-o"></i> {{ $date }}</li>
                    <li><i class="fa fa-phone"></i> {{ __('+372(29) 5-82-82-56') }}</li>
                    <li><i class="fa fa-envelope-o"></i> {{ __('dnvmaster50@gmail.com') }}</li>
                </ul>
            </div>
            <div class="col">
                <a class="top-app" href="{{ route('login') }}"><i class="fa fa-sign-in">&nbsp;{{ trans('ru.login')  }}</i></a>
                <a class="top-app" href="{{ route('register') }}"><i class="fa fa-users">&nbsp;{{ trans('ru.register') }}</i></a>
            </div>
        </div>
    </div>
</div>
