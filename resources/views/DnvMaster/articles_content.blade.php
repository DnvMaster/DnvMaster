@if($articles)
    <div class="blog-post">
        @foreach($articles as $article)
            <img src="{{ asset('DnvMaster') }}/images/articles/{{ $article->img->path }}" alt="{{ $article->title }}" title="{{ $article->title }}">
            <h4 class="mt-15"><a href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ $article->title }}</a></h4>

            <div class="blog-post-info">
                <i class="icon-users"></i><span>{{ $article->user->name }}</span>
            </div>
            <div class="blog-post-info">
                <i class="icon-calendar-6"></i><span>{{ $article->created_at->format('d M Y') }}</span>
            </div>
            <div class="blog-post-info">
                <i class="icon-attachment"></i><span><a href="{{ route('articles.cat',$article->category->alias) }}">{{ $article->category->title }}</a></span>
            </div>

            <p class="mt-25">{{ $article->short_text }}</p>

            <blockquote>
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-3">
                        <div class="mt-15">
                            <i class="icon-{{ $article->icon }}"></i>
                        </div>
                    </div>
                    <div class="col-md-11 col-sm-11 col-xs-9 blockquote">
                        <p>{{ $article->bold_text }}</p>
                    </div>
                </div>
            </blockquote>

            <p>{{ $article->text }}</p>
            <a href="{{ route('articles.show',['alias'=>$article->alias]) }}" class="button-lg button-primary mt-5 mb-15">{{ trans('ru.read_mo') }}</a>
            <div class="blog-post-share"></div>
        @endforeach
    </div>
@endif
