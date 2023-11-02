
<div class="product-detail__wrapper">
    @if(isset($product))
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="product-detail__slide-two">
                    <div class="product-detail__slide-two__big">
                        <div class="slider__item">
                            <img src="{{ asset('uploads/' . $product->image) }}" alt="Product image2" />
                        </div>
                        <div class="slider__item">
                            <img src="{{ asset('uploads/' . $product->image) }}" alt="Product image3" />
                        </div>
                        <div class="slider__item">
                            <img src="{{ asset('uploads/' . $product->image) }}" alt="Product image4" />
                        </div>
                        <div class="slider__item">
                            <img src="{{ asset('uploads/' . $product->image) }}" alt="Product image6" />
                        </div>
                    </div>
{{--                    <div class="">--}}
{{--                        @foreach($images as $image)--}}
{{--                            <p>Path: {{$image->filepath}}</p>--}}
{{--                        @endforeach--}}


{{--                    </div>--}}
                    <div class="product-detail__slide-two__small">
                        @foreach ($product->images as $image)
                                <img src="{{ asset('storage/' . $image->filepath) }}" alt="{{ $product->name }}" class="img-fluid">
                        @endforeach
{{--                        @foreach($images as $image)--}}
{{--                            <p>{{$image->path}}</p>--}}
{{--                            <div class="slider__item">--}}
{{--                                <img src="{{ asset('uploads/'. $image->filepath ) }}" alt="HI" />--}}
{{--                            </div>--}}
{{--                        @endforeach--}}


                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="product-detail__content">
                    <div class="product-detail__content">
                        <div class="product-detail__content__header">
                            <h5>eyes</h5>
                            <h2>{{$product->name}}</h2>
                        </div>
                        <div class="product-detail__content__header__comment-block">
                            <div class="rate">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i
                                ><i class="fas fa-star"></i><i class="fas fa-star"></i
                                ><i class="far fa-star"></i>
                            </div>
                            <p>03 review</p>
                            <a href="#">Write a reviews</a>
                        </div>
                        <h3>{{$product->cost_price}}</h3>
                        <div class="divider"></div>
                        <div class="product-detail__content__footer">
                            <ul>
                                <li>Brand:gucci</li>
                                <li>Product code: PM 01</li>
                                <li>Reward point: 30</li>
                                <li>Availability: In Stock</li>
                            </ul>
                            <div class="product-detail__colors">
                                <span>Color:</span>
                                <div
                                    class="product-detail__colors__item"
                                    style="background-color: #8b0000"
                                ></div>
                                <div
                                    class="product-detail__colors__item"
                                    style="background-color: #4169e1"
                                ></div>
                            </div>

                                <form action="{{route('add_to_cart')}}" method="post">
                                    @csrf
                                    <div class="product-detail__controller">
{{--                                        <div class="quantity-controller -border -round">--}}
{{--                                            <div class="quantity-controller__btn -decrease">--}}
{{--                                                ---}}
{{--                                            </div>--}}
{{--                                            <div class="quantity-controller__number">1</div>--}}
{{--                                            <div class="quantity-controller__btn -increase">--}}
{{--                                                +--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quantity">
                                                    -
{{--                                                    <i class="fas fa-minus"></i>--}}
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="btn btn-danger input-number" value="1" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quantity">
{{--                                                    <i class="fas fa-plus"></i>--}}
                                                    +
                                                </button>
                                            </span>
                                        </div>
                                        <input type="hidden" name="productId" value="{{$product->id}}" id="quantity-hidden">

                                        <button type="submit" class="add-to-cart -dark">
                                            <h5>Add to cart</h5>
                                        </button>
                                        <div class="product-detail__controler__actions"></div>
                                        <a class="btn -round -white" href="#">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </div>
                                </form>

                            </div>
                            <div class="divider"></div>
                            <div class="product-detail__content__tab">
                                <ul class="tab-content__header">
                                    <li
                                        class="tab-switcher"
                                        data-tab-index="0"
                                        tabindex="0"
                                    >
                                        Description
                                    </li>
                                    <li
                                        class="tab-switcher"
                                        data-tab-index="1"
                                        tabindex="0"
                                    >
                                        Shipping & Returns
                                    </li>
                                    <li
                                        class="tab-switcher"
                                        data-tab-index="2"
                                        tabindex="0"
                                    >
                                        Reviews ( 03 )
                                    </li>
                                </ul>
                                <div id="allTabsContainer">
                                    <div
                                        class="tab-content__item -description"
                                        data-tab-index="0"
                                    >
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrices gravida. Risus commodo viverra maecenas
                                            accumsan lacus vel facilisis.
                                        </p>
                                    </div>
                                    <div
                                        class="tab-content__item -ship"
                                        data-tab-index="1"
                                        style="display: none"
                                    >
                                        <h5><span>Ship to</span>New york</h5>
                                        <ul>
                                            <li>
                                                Standard Shipping on order over 0kg - 5kg.
                                                <span>+10.00</span>
                                            </li>
                                            <li>
                                                Heavy Goods Shipping on oder over 5kg-10kg .
                                                <span>+20.00</span>
                                            </li>
                                        </ul>
                                        <h5>Delivery &amp; returns</h5>
                                        <p>
                                            We diliver to over 100 countries around the word.
                                            For full details of the delivery options we offer,
                                            please view our Delivery information.
                                        </p>
                                    </div>
                                    <div
                                        class="tab-content__item -review"
                                        data-tab-index="2"
                                        style="display: none"
                                    >
                                        <div class="review">
                                            <div class="review__header">
                                                <div class="review__header__avatar">
                                                    <img
                                                        src="https://i1.wp.com/metro.co.uk/wp-content/uploads/2020/03/GettyImages-1211127989.jpg?quality=90&amp;strip=all&amp;zoom=1&amp;resize=644%2C416&amp;ssl=1"
                                                        alt="Reviewer avatar"
                                                    />
                                                </div>
                                                <div class="review__header__info">
                                                    <h5>Lionel Messi</h5>
                                                    <p>Mar 17, 2020</p>
                                                </div>
                                                <div class="review__header__rate">
                                                    <div class="rate">
                                                        <i class="fas fa-star"></i
                                                        ><i class="fas fa-star"></i
                                                        ><i class="fas fa-star"></i
                                                        ><i class="fas fa-star"></i
                                                        ><i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="review__content">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore.
                                            </p>
                                            <a class="review__report" href="#"
                                            >Report as Inappropriate</a
                                            >
                                        </div>
                                        <form>
                                            <h5>Write a review</h5>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="input-validator">
                                                        <input
                                                            type="text"
                                                            name="name"
                                                            placeholder="Name"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="input-validator">
                                                        <input
                                                            type="text"
                                                            name="email"
                                                            placeholder="Email"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-validator">
                                    <textarea
                                        name="message"
                                        placeholder="Message"
                                        rows="5"
                                    ></textarea>
                                                    </div>
                                                    <span class="input-error"></span>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn -dark">
                                                        Write a review
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decreaseButton = document.querySelector('button[data-type="minus"]');
        const increaseButton = document.querySelector('button[data-type="plus"]');
        const quantityInput = document.querySelector('.input-number');

        decreaseButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateValue(); // Gọi hàm cập nhật giá trị
            }
        });

        increaseButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            let maxValue = parseInt(quantityInput.getAttribute('max'));
            if (currentValue < maxValue) {
                quantityInput.value = currentValue + 1;
                updateValue(); // Gọi hàm cập nhật giá trị
            }
        });

        function updateValue() {
            let updatedValue = parseInt(quantityInput.value);
            console.log(updatedValue); // In giá trị số đã tăng/giảm vào console
            // Bạn có thể sử dụng giá trị này cho mục đích khác
        }
    });
</script>

</div>
