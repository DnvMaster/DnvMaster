<div class="blog-post">
    @if($article)
        <img src="{{ asset('DnvMaster/images') }}/articles/{{ $article->img->path }}" alt="{{ $article->title }}">
        <h4 class="mt-15">{{ $article->title }}</h4>
        <div class="blog-post-info">
            <i class="icon-calendar"></i><span>{{ $article->created_at->format('d. M Y') }}</span>
        </div>
        <div class="blog-post-info">
            <i class="icon-user"></i><span>{{ $article->user->name }}</span>
        </div>
        <div class="blog-post-info">
            <i class="icon-command"></i><span><a href="{{ route('articles.category',$article->category->alias) }}">{{ $article->category->title }}</a></span>
        </div>
        <div class="blog-post-info">
            <i class="fa fa-comment-o"></i><span>{{ count($article->comments) ? count($article->comments) : '0' }}&nbsp;{{ Lang::choice('ru.comments',count($article->comments)) }}</span>
        </div>
        <blockquote>
            <div class="row">
                <div class="col">
                    <p>{!! $article->text !!}</p>c
                </div>
            </div>
        </blockquote>
    @endif
</div>
