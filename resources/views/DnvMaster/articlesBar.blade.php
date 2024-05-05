<div class="blog-post-left">
    @if(!$portfolios->isEmpty())
        <h4>{{ Lang::get('ru.articles_last') }}</h4>
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
<div class="blog-post-left categories">
    @if(!$comments->isEmpty())

    @endif
    <h4>{{ Lang::get('ru.comments_last') }}</h4>
        @foreach($comments as $comment)
            <div class="footer-post-img">
                @set($hash,($comment->email) ? md5($comment->email) : $comment->user->email)
                <img src="https://www.gravatar.com/avatar/{{$hash}}?d=mm&s=55">
            </div>
            <div class="footer-post-content">
                <p>{{ $comment->text }} <a href="{{ route('articles.show',['alias'=>$comment->article->alias]) }}">{{ $comment->article->user->name }}</a></p>
            </div>
        @endforeach
</div>