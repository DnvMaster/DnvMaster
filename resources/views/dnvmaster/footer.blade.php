<footer class="footer bg-color" data-bg-color="#F6F7FA">
    <div class="footer-top border-bottom pt--70 pb--65 pb-sm--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-md--35">
                    <div class="footer-widget">
                        <div class="textwidget mb--21">
                            <figure class="footer-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset(env('DNVMASTER')) }}/img/logo/DnvMaster.png" alt="DnvMaster"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="footer-widget">
                        <div class="newsletter-form-widget">
                            <p>Subscribe to our Newsletter. And get all update for next time</p>
                            <form action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a" method="post" name="mc-embedded-subscribe-form" class="newsletter-form mc-form">
                                <input type="email" name="newsletter_email" class="newsletter-form__input" placeholder="Enter Your Email">
                                <button type="submit" class="newsletter-form__btn">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5 offset-md-1 mb-md--35 mb-sm--25">
                    <div class="footer-widget">
                        <h3 class="widget-title mb--35 mb-sm--20">Меню</h3>
                        <div class="footer-widget">
                            <ul class="footer-menu">
                                <li><a href="{{ url('/') }}">Главная</a></li>
                                <li><a href="services.html">HTML</a></li>
                                <li><a href="our-projects.html">CSS</a></li>
                                <li><a href="blog.html">PHP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 mb-sm--30">
                    <div class="footer-widget">
                        <h3 class="widget-title mb--35 mb-sm--20">Frameworks</h3>
                        <div class="footer-widget">
                            <ul class="footer-menu">
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">Laravel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-5">
                    <div class="footer-widget">
                        <h3 class="widget-title mb--35 mb-sm--20">Github</h3>
                        <div class="footer-widget">
                            <ul class="footer-menu">
                                <li><a href="#">Commit</a></li>
                                <li><a href="#">Push</a></li>
                                <li><a href="#">Ветка main</a></li>
                                <li><a href="#">Global</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom ptb--17">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="copyright-text">&copy; <?=date('Y'); ?> DnvMaster | all rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
