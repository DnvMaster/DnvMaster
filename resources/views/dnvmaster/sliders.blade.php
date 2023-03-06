<section class="homepage-slider mb--10pt">
    <div class="element-carousel"
         data-slick-options='{
                    "slidesToShow": 1,
                    "autoplay": true
                }'>
        @if(count($sliders) > 0)
            @foreach($sliders as $slider)
            <div class="single-slide d-flex align-items-center" style="background-image: url({{ asset(env('DNVMASTER')) }}/img/{{ $slider->img }});">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-8">
                            <div class="slider-content">
                                <h1 class="heading__primary mb--3pt6" data-animation="fadeInUp" data-duration=".3s" data-delay=".3s">{{ $slider->title }}</h1>
                                <a href="#" class="btn" data-animation="fadeInUp" data-duration=".3s" data-delay=".6s">Financial Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</section>
