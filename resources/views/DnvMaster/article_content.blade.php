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
                    <p>{!! $article->text !!}</p>
                </div>
            </div>
        </blockquote>
    @endif
</div>
<!-- Start comments -->
<div class="section-block-grey" id="comments">
    <div class="row">
        <div id="comments">
            <h3 id="comments-title"><i class="fa fa-comments-o">&nbsp;</i><span>2</span> Комментария</h3>
            <ol class="commentlist form-group">

                <li class="comment">
                    <div class="comment-container">
                        <div class="comment-author">
                            <img src="{{ asset('DnvMaster/images/person/unknow.png') }}" alt="">
                            <cite class="fn">{{ __('Аноним') }}</cite>
                        </div>
                        <div class="comment-meta">
                            <div class="intro">
                                <div class="commentDate">
                                    <a href="#comment-2">06, May 2024 at 04:13 pm</a>
                                </div>
                                <div class="commentNumber">#&nbsp;1</div>
                                <div class="comment-body">
                                    <p>Привет DnvMaster, мы знаем что вы PHP-разработчик на Laravel</p>
                                </div>
                                <div class="reply form-group">
                                    <a class="comment-reply-link" href="#respond" onclick="moveForm(return addComment.moveForm(&quot;comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;41&quot;)">{{ __('Ответить') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="comment bypostauthor">
                    <div class="comment-container">
                        <div class="comment-author">
                            <img src="{{ asset('DnvMaster/images/person/person-2.jpg') }}" alt="">
                            <cite class="fn">{{ __('Николай') }}</cite>
                        </div>
                        <div class="comment-meta">
                            <div class="intro">
                                <div class="commentDate">
                                    <a href="#">04, May 2024 at 17:13 am</a>
                                </div>
                                <div class="commentNumber">#&nbsp;2</div>
                                <div class="comment-body">
                                    <p>Привет DnvMaster, мы знаем что вы PHP-разработчик на Laravel</p>
                                </div>
                                <div class="reply form-group">
                                    <a class="comment-reply-link" href="#respond" onclick="moveForm(return addComment.moveForm(&quot;comment-3&quot;, &quot;3&quot;, &quot;respond&quot;, &quot;41&quot;)">{{ __('Ответить') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    <!-- Start form comments -->
    <form action="" method="post" class="row g-3">
        @csrf
        <div class="col-auto">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ __('Имя') }}">
        </div>
        <div class="col-auto">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{ __('Е-мэйл') }}">
        </div>
        <div class="mb-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ __('Оставьте свой комментарий') }}"></textarea>
        </div>
        <div class="center-holder">
            <button type="submit" class="button button-primary mt-30">{{ __('Отправить') }}</button>
        </div>
    </form>
    <!-- End form comments -->
</div>
<!-- End comments -->
