@if($portfolios && count($portfolios) > 0)
    @foreach($portfolios as $key => $portfolio)
        @if($key == 0)
            <div class="blog-post">
                <img src="{{ asset('DnvMaster') }}/images/portfolio/{{ $portfolio->img->path }}" alt="{{ $portfolio->title }}" title="{{ $portfolio->title }}">
                <h4 class="mt-3"><a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}">{{ $portfolio->title }}</a></h4>
                <div class="blog-post-info">
                    <i class="icon-user">&nbsp;<span>{{ $portfolio->filter->title }}</span></i>
                </div>
                <div class="blog-post-info">
                    <i class="icon-calendar-6">&nbsp;<span>{{ $portfolio->created_at->format('d.m.Y')}}</span></i>
                </div>
                <div class="blog-post-info">
                    <i class="icon-attachment">&nbsp;<span>{{ __('Категория') }}</span></i>
                </div>
                <p class="mt-25">{{ $portfolio->text }}</p>
                <a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}">{{ trans('ru.read_mo') }}</a>
            </div>
            @continue
        @endif
    @endforeach
@else
    <div class="blog-post">
        <img src="{{ asset('DnvMaster/images/404.png')}}" alt="{{ trans('ru.404') }}" title="{{ trans('ru.404') }} }}">
        <h4 class="mt-3"><a href="{{ url('/') }}">{{ trans('ru.404') }}</a></h4>
    </div>
@endif
