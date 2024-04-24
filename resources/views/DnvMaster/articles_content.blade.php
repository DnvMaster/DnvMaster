@if($articles)
    <div class="blog-post">
        @foreach($articles as $article)
            <img src="{{ asset('DnvMaster') }}/images/articles/{{ $article->img->path }}" alt="{{ $article->title }}" title="{{ $article->title }}">
            <h4>{{ $article->title }}</h4>

            <div class="blog-post-info">
                <i class="icon-users"></i><span>Admin</span>
            </div>
            <div class="blog-post-info">
                <i class="icon-calendar-6"></i><span>11 Ogt 2017</span>
            </div>
            <div class="blog-post-info">
                <i class="icon-attachment"></i><span>Business</span>
            </div>

            <p class="mt-25">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>

            <blockquote>
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-3">
                        <div class="mt-15">
                            <i class="icon-unlink"></i>
                        </div>
                    </div>
                    <div class="col-md-11 col-sm-11 col-xs-9 blockquote">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </blockquote>

            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing. </p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. </p>
            <div class="mb-60"></div>
        @endforeach
        <div class="blog-post-share">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 left-holder">
                    <a href="#">Business,</a>
                    <a href="#">Marketing,</a>
                    <a href="#">Finance</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 share-icons right-holder">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
@endif
