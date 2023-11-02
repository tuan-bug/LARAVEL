<div class="slider -style-1 slider-arrow-middle">
    <div class="slider__carousel">
        @foreach($slides as $slide)
            <div class="slider__carousel__item slider-1">
                <div class="container">
                    <div class="slider-background"><img class="slider-background" src="{{ asset('uploads/' . $slide->image) }}"
                                                        alt="Slider background" /></div>
                    <div class="slider-content">
                        <h5 class="slider-content__subtitle" data-animation-in="fadeInUp" data-animation-delay="0.1">{{$slide->sub_title}}
                        </h5>
                        <h1 class="slider-content__title" data-animation-in="fadeInUp" data-animation-delay="0.2">
                            {{$slide->title}}
                        </h1>
                        <div data-animation-in="fadeInUp" data-animation-out="fadeInDown" data-animation-delay="0.4"><a
                                class="btn -red" href="#">{{$slide->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
