@if($portfolios && count($portfolios) > 0)
    <div class="inner-page-content mt--9pt4">
        <div class="container">
            <div class="row mb--10pt">
                <!-- Start left -->
                <div class="col-lg-9 mb-md--50">
                    <div class="row">
                        @foreach($portfolios as $key=>$portfolio)
                            @if($key == 0)
                                <div class="col-12 mb--50">
                                    <article class="blog format-standard">
                                        <div class="blog__inner">
                                            <div class="blog__media">
                                                <figure class="image">
                                                    <img src="{{ asset(env('DNVMASTER')) }}/img/blog/blog-06.jpg" alt="Blog title" class="w-100">
                                                    <a href="#" class="item-overlay"></a>
                                                </figure>
                                            </div>
                                            <div class="blog__info">
                                                <h3 class="blog__title"><a href="#">{{ $portfolio->title }}</a></h3>
                                                <div class="blog__meta">
                                                    <span class="posted-on">13.02.2019</span>
                                                    <span class="posted-by"><span>By: </span><a href="#">{{ $portfolio->filter->title }}</a></span>
                                                </div>
                                                <div class="blog__desc">
                                                    <p>{{ \Illuminate\Support\Str::limit($portfolio->text,200) }}</p>
                                                </div>
                                                <div class="blog__footer-meta">
                                                    <a href="#" class="read-more-btn">Перейти</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @continue
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- End left-->
                <!-- Start right-->
                <div class="col-lg-3">
                    <div class="blog-sidebar pl--15 pl-lg--0">
                        <div class="bl-widget author">
                            <div class="inner">
                                <div class="thumb">
                                    <img src="assets/img/others/team-04.jpg" alt="Author Images">
                                </div>
                                <div class="info">
                                    <h5 class="mb--5">Ayo Burion</h5>
                                    <p class="degne">UI/ Web Designer</p>
                                    <p class="mb--25">An Affrotable world wide business service It is</p>
                                    <ul class="social mb--20">
                                        <li class="social__item">
                                            <a href="https://www.facebook.com" class="social__link">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.twitter.com" class="social__link">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://www.plus.google.com" class="social__link">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="autor-meta">
                                        <span>Articles <strong>84</strong></span>
                                        <span>Comments <strong>490</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bl-widget post mt--50">
                            <div class="inner">
                                <h5 class="title">Top News</h5>
                                <ul class="post-list">
                                    <li>
                                        <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                        <span><i class="fa fa-clock-o"></i> 3 Days Ago</span>
                                    </li>
                                    <li>
                                        <a href="#">There are many variations of passages of Lorem Ipsum available, </a>
                                        <span><i class="fa fa-clock-o"></i> 8 Days Ago</span>
                                    </li>
                                    <li>
                                        <a href="#">Lorem Ipsum is simply dummy text of the printing.</a>
                                        <span><i class="fa fa-clock-o"></i> 4 Days Ago</span>
                                    </li>
                                    <li>
                                        <a href="#">Sed ut perspiciatis unde omnis iste natus error.</a>
                                        <span><i class="fa fa-clock-o"></i> 6 Days Ago</span>
                                    </li>
                                    <li>
                                        <a href="#">Lorem Ipsum is simply dummy text.</a>
                                        <span><i class="fa fa-clock-o"></i> 5 Days Ago</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bl-widget quote mt--50">
                            <div class="inner">
                                <div class="post-quote">
                                    <div class="quote-info">
                                        <i class="fa fa-quote-right"></i>
                                        <div class="info">
                                            <h6 class="mb--0">CLEM OJAK</h6>
                                            <span>Designer</span>
                                        </div>
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End right-->
            </div>
        </div>
    </div>
@else
    <div class="col-12 mb--50">
        <article class="blog format-standard">
            <div class="blog__inner">
                <div class="blog__media">
                    <figure class="image">
                        <img src="public/dnvmaster/img/blog/page_error.png" alt="Blog Image" class="w-100">
                        <a href="blog-details-image.html" class="item-overlay"></a>
                    </figure>
                </div>
                <div class="blog__info">
                    <h3 class="blog__title"><a href="blog-details-image.html">Такой страницы не существует.</a></h3>
                    <div class="blog__desc">
                        <p>Возможно она появиться в самое ближайшее время. Если Вы хотите снова вернуться на предыдущую страницу,то Вам сюда</p>
                    </div>
                    <div class="blog__footer-meta">
                        <a href="blog-details-image.html" class="read-more-btn">Перейти</a>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endif



