<div class="blog-post-left">
    @if(!$portfolios->isEmpty())
        <h4>{{ Lang::get('ru.articles_res') }}</h4>
        @foreach($portfolios as $portfolio)
            <div class="recent-posts">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 recent-posts-img">
                        <img src="{{ asset('DnvMaster') }}/images/portfolio/{{ $portfolio->img->mini }}" title="{{ $portfolio->title }}" alt="{{ $portfolio->title }}">
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 recent-posts-text">
                        <p><a href="{{ route('portfolios.show',['alias'=>$portfolio->alias]) }}">{{ $portfolio->title }}</a></p>
                        <span>{{ $portfolio->created_at->format('d. F. Y') }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>