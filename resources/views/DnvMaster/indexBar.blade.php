<div class="blog-post-left">
    @if($articles)
        <h4>{{ __('Последний пост') }}</h4>
        @foreach($articles as $article)
            <div class="recent-posts">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 recent-posts-img">
                        <img src="{{ asset('DnvMaster') }}/images/posts/{{ $article->img->mini }}" title="{{ $article->title }}" alt="{{ $article->title }}">
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12 recent-posts-text">
                        <p><a href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ $article->title }}</a></p>
                        <span>{{ $article->created_at->format('d. F. Y') }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
<div class="blog-post-left categories">
    <h4>{{ __('Категории') }}</h4>
    <ul>
        <li><a href="#">{{ __('Bootstrap') }}</a></li>
        <li><a href="#">{{ __('Laravel') }}</a></li>
        <li><a href="#">{{ __('MySQL') }}</a></li>
        <li><a href="#">{{ __('HTML') }}</a></li>
    </ul>
</div>
<div class="blog-post-left about">
    <h4>{{ __('О нас') }}</h4>
    <p>{{ __('Если Вы хотите иметь современный, высококачественный и функциональный веб-сайт, заходите к нам. ') }}</p>
</div>
