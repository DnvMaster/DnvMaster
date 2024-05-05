@if($articles)
    <div class="blog-post">
        @foreach($articles as $article)
            <img src="{{ asset('DnvMaster') }}/images/articles/{{ $article->img->path }}" alt="{{ $article->title }}" title="{{ $article->title }}">
            <h4 class="mt-15"><a href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ $article->title }}</a></h4>

            <div class="blog-post-info">
                <i class="icon-users"></i><span>{{ $article->user->name }}</span>
            </div>
            <div class="blog-post-info">
                <i class="icon-attach"></i><span><a href="{{ route('articles.category',$article->category->alias) }}">{{ $article->category->title }}</a></span>
            </div>
            <div class="blog-post-info">
                <i class="icon-compose"></i><span><a href="{{ route('articles.show',['alias'=>$article->alias]) }}#respond">{{ count($article->comments) ? count($article->comments) : '0' }}&nbsp;{{ Lang::choice('ru.comments', count($article->comments)) }}</a></span>
            </div>

            <p class="mt-25">{!! $article->short_text !!}</p>

            <blockquote>
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-3">
                        <div class="mt-15">
                            <i class="icon-{{ $article->icon }}"></i>
                        </div>
                    </div>
                    <div class="col-md-11 col-sm-11 col-xs-9 blockquote">
                        <p>{!! $article->bold_text !!}</p>
                    </div>
                </div>
            </blockquote>

            <p>{{ $article->text }}</p>
            <a href="{{ route('articles.show',['alias'=>$article->alias]) }}" class="button-lg button-primary mt-5 mb-15">{!! Lang::get('ru.read_mo') !!}</a>
            <div class="blog-post-share"></div>
        @endforeach

        <nav aria-label="Page navigation example">
            @if($articles->lastPage() > 1)
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        @if($articles->currentPage() !== 1)
                            <a class="page-link" href="{{ $articles->url($articles->currentPage() - 1) }}" aria-label="Previous"><span aria-hidden="true">{!! Lang::get('pagination.previous') !!}</span></a>
                        @endif
                    </li>
                    @for($i=1; $i<=$articles->lastPage(); $i++)
                        <li class="page-item">
                            @if($articles->currentPage() == $i)
                                <a class="page-link">{{ $i }}</a>
                            @else
                                <a class="page-link " href="{{ $articles->url($i) }}">{{$i}}</a>
                        </li>
                        @endif
                    @endfor
                    <li class="page-item">
                        @if($articles->currentPage() !== $articles->lastPage())
                            <a class="page-link" href="{{ $articles->url($articles->currentPage() + 1) }}" aria-label="Next">
                                <span aria-hidden="true">{!! Lang::get('pagination.next') !!}</span>
                            </a>
                        @endif
                    </li>
                </ul>
            @endif
        </nav>
    </div>
    @else
    <div class="blog-post">
        <img src="{{ asset('DnvMaster') }}/images/404.png" alt="{!! Lang::get('ru.no_page') !!}" title="{!! Lang::get('ru.no_page') !!}">
        <h4 class="mt-5">{!! Lang::get('ru.articles_no') !!}<a style="color: darkred;" href="{{ url('/') }}">&nbsp;&nbsp;{!! Lang::get('ru.go_back') !!}</a></h4>
    </div>
@endif
