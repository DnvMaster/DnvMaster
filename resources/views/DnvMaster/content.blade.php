<!-- Start Blog-post -->
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="blog-post">
        <img src="{{ asset('DnvMaster/images/blog/009-770x368.jpg') }}" alt="">
        <h4 class="mt-3">{{ __('Установка пакета Laravel Breeze.') }}</h4>
        <div class="blog-post-info">
            <i class="icon-user">&nbsp;<span>{{ __('Администратор') }}</span></i>
        </div>
        <div class="blog-post-info">
            <i class="icon-calendar-6">&nbsp;<span>{{ __('19.04.2024') }}</span></i>
        </div>
        <div class="blog-post-info">
            <i class="icon-attachment">&nbsp;<span>{{ __('Категория') }}</span></i>
        </div>
        <p class="mt-25">{{ __('Установка аутентификации Laravel - это процесс настройки системы авторизации и входа для вашего приложения Laravel. Это позволит пользователям регистрироваться, входить в систему и обновлять свои данные.') }}</p>
        <blockquote>
            <div class="row">
                <div class="col-md-1 col-sm-1 col-xs-3">
                    <div class="mt-15">
                        <i class="icon-unlink"></i>
                    </div>
                </div>
                <div class="col-md-11 col-sm-11 col-xs-9">
                   <p>{{ __('Laravel Breeze - это простой и быстрый способ добавить аутентификацию и авторизацию в ваше приложение Laravel.') }}</p>
                </div>
            </div>
        </blockquote>
        <p class="mt-25 mb-5">{{ __(
            'Установка пакета Laravel Breeze. Выполните следующую команду в терминале: composer create-project --prefer-dist laravel/breeze breeze-app
             Эта команда создаст новый проект Laravel с установленным пакетом Breeze. Настройте базу данных, открыв файл .env и установите переменные
             окружения для вашей базы данных.'
        ) }}</p>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="blog-post-left">
        <h4>{{ __('Последний пост') }}</h4>

        <div class="recent-posts">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 recent-posts-img">
                    <img src="{{ asset('DnvMaster/images/posts/001-116x61.png') }}" alt="">
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12 recent-posts-text">
                    <p><a href="#">{{ __('Чтения данных в Eloquent ORM') }}</a></p>
                    <span>{{ __('29 Августа') }}</span>
                </div>
            </div>
        </div>

        <div class="recent-posts">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 recent-posts-img">
                    <img src="{{ asset('DnvMaster/images/posts/002-116x61.png') }}" alt="">
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12 recent-posts-text">
                    <p><a href="#">{{ __('Чтения данных в Eloquent ORM') }}</a></p>
                    <span>{{ __('29 Августа') }}</span>
                </div>
            </div>
        </div>

        <div class="recent-posts">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12 recent-posts-img">
                    <img src="{{ asset('DnvMaster/images/posts/003-116x61.png') }}" alt="">
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12 recent-posts-text">
                    <p><a href="#">{{ __('Чтения данных в Eloquent ORM') }}</a></p>
                    <span>{{ __('29 Августа') }}</span>
                </div>
            </div>
        </div>

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
</div>
<!-- End Blog-post -->
<!-- Start parallax -->
<div class="parallax" style="background-image: url('/public/DnvMaster/images/parallax.png')">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="count-up-box">
                    <h4 class="count-up">{{ __('27') }}</h4>
                    <h5>{{ __('Laravel 9') }}</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="count-up-box">
                    <h4 class="count-up">{{ __('19') }}</h4>
                    <h5>{{ __(' Bootstrap 5.3') }}</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="count-up-box">
                    <h4 class="count-up">{{ __('12') }}</h4>
                    <h5>{{ __('MySQL') }}</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="count-up-box">
                    <h4 class="count-up">{{ __('27') }}</h4>
                    <h5>{{ __('PHP 8.1') }}</h5>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End parallax -->
<!-- Start Services -->
<div class="section-block-grey">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box clearfix">
                    <div class="box-icon">
                        <i class="icon-price-tag"></i>
                    </div>
                    <div class="box-content">
                        <p>{{ __('Для чтения данных в Eloquent ORM вы можете использовать метод all() для получения всех записей из таблицы или метод first().') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box clearfix">
                    <div class="box-icon">
                        <i class="icon-taking-notes"></i>
                    </div>
                    <div class="box-content">
                        <p>{{ __('Одним из важных аспектов разработки веб-приложений является возможность загрузки и отображения изображений.') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box clearfix">
                    <div class="box-icon">
                        <i class="icon-stopwatch-1"></i>
                    </div>
                    <div class="box-content">
                        <p>{{ __('Элегантное редактирование данными с использованием Eloquent ORM является неотъемлемой частью разработки.') }}</p>
                   </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box clearfix">
                    <div class="box-icon">
                        <i class="icon-scientist-avatar"></i>
                    </div>
                    <div class="box-content">
                        <p>{{ __('Eloquent ORM является одним из самых мощных и эффективных инструментов для работы с базами данных в мире разработки веб-приложений.') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box clearfix">
                    <div class="box-icon">
                        <i class="icon-thinking-head"></i>
                    </div>
                    <div class="box-content">
                        <p>{{ __('В Laravel Query Builder для объединения таблиц используется метод join(), который принимает два параметра: имя присоединяемой таблицы и условие соединения.') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service-box clearfix">
                    <div class="box-icon">
                        <i class="icon-smartphone-6"></i>
                    </div>
                    <div class="box-content">
                        <p>{{ __('Аутентификация - это процесс проверки подлинности пользователя, чтобы убедиться, что он имеет доступ к определенным ресурсам.') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Services -->
