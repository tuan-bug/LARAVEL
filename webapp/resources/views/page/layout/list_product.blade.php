<div class="shop">
    <div class="container">
        <div class="section-title -center" style="margin-bottom: 1.875em">
            <h2>Beauty Products</h2><img src="backend/page/images/content-deco.png" alt="Decoration">
        </div>
        <div class="shop-header">
            <div class="shop-header__view">
                <div class="shop-header__view__icon">
                    <a class="active" href="#">
                        <i class="bi bi-grid-3x2-gap-fill" style="color: black;"></i>
                    </a
                    ><a href="#"><i class="fas fa-bars"></i></a>
                </div>
                <h5 class="shop-header__page">Shop Fullwidth 4 Columns</h5>
            </div>
            <select class="customed-select" name="#">
                <option value="az">A to Z</option>
                <option value="za">Z to A</option>
                <option value="low-high">Low to High Price</option>
                <option value="high-low">High to Low Price</option>
            </select>
        </div>
        <div class="shop-products">
            <div class="shop-products__gird">
                <div class="row mx-n1 mx-lg-n3">
                    @if (isset($products))
                        @foreach ($products as $item)
                            <div class="col-6 col-md-4 col-lg-3 px-1 px-lg-3">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a class="product-thumb__image" href="{{route('detail', ['id'=>$item->id] )}}">
                                            <img src="{{ asset('uploads/' . $item->image) }}"
                                                alt="Product image" />
                                        </a>
                                        <div class="product-thumb__actions">
                                            <div class="product-btn">
                                                <a
                                                    class="btn -white product__actions__item -round product-atc"
                                                    href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                            </div>
                                            <div class="product-btn">
                                                <a
                                                    class="btn -white product__actions__item -round product-qv"
                                                    href="#"
                                                ><i class="fas fa-eye"></i
                                                    ></a>
                                            </div>
                                            <div class="product-btn">
                                                <a
                                                    class="btn -white product__actions__item -round"
                                                    href="#"
                                                ><i class="fas fa-heart"></i
                                                    ></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content__header">
                                            <div class="product-category">eyes</div>
                                            <div class="rate">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i><i class="fas fa-star"></i
                                                ><i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <a class="product-name" href="{{route('detail', ['id'=>$item->id])}}"> {{$item->name}} </a>
                                        <div class="product-content__footer">
                                            <h5 class="product-price--main">{{$item->cost_price}}</h5>
                                            <div class="product-colors">
                                                <div
                                                    class="product-colors__item"
                                                    style="background-color: #8b0000"
                                                ></div>
                                                <div
                                                    class="product-colors__item"
                                                    style="background-color: #4169e1"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="shop-products__list">
                <div class="row mx-n1 mx-lg-n3">
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type">
                                    <h5 class="-new">New</h5>
                                </div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/1.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/2.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">eyes</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >The expert mascaraa</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$35.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/2.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/3.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">eyes</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Velvet Melon High Intensity</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$38.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type">
                                    <h5 class="-sale">-15%</h5>
                                </div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/3.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/4.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">eyes</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Leather shopper bag</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$30.00</h5>
                                            <h5 class="product-price--discount">$35.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/4.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/5.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">eyes</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Luxe jewel lipstick</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$38.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type">
                                    <h5 class="-sale">-50%</h5>
                                </div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/5.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/6.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">face</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Penpoint seamless beauty</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$20.00</h5>
                                            <h5 class="product-price--discount">$40.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/7.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/8.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">face</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >The Sneaky lips</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$38.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/8.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/9.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">face</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >White Facial Cream</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$38.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/9.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/10.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">face</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Orange Massage Cream</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$55.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/10.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/11.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">lips</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Valinta Fairness Massage Cream</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$27.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/11.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/12.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">lips</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Massage Cream Cucumber</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$16.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/12.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/13.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">lips</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Matte Walnut &amp; Bamboo Scrub</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$32.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-1 px-lg-3">
                        <div class="product-list">
                            <div class="product-list-thumb">
                                <div class="product-type"></div>
                                <a
                                    class="product-list-thumb__image"
                                    href="product-detail.html"
                                ><img
                                        src="assets/images/product/13.png"
                                        alt="Product image" /><img
                                        src="assets/images/product/14.png"
                                        alt="Product image"
                                    /></a>
                            </div>
                            <div class="product-list-content">
                                <div class="product-list-content__top">
                                    <div class="product-category__wrapper">
                                        <h5 class="product-category">lips</h5>
                                        <div class="rate">
                                            <i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="fas fa-star"></i
                                            ><i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-name" href="product-detail.html"
                                    >Castor Oil BP</a
                                    >
                                    <div class="product__price">
                                        <div class="product__price__wrapper">
                                            <h5 class="product-price--main">$24.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content__bottom">
                                    <p class="product-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eaque ipsa fugiat accusantium reiciendis rem
                                        doloribus iste doloremque
                                    </p>
                                    <div class="product-actions">
                                        <div class="product-btn">
                                            <div class="add-to-cart">
                                                <a class="btn -round -red" href="#"
                                                ><i class="fas fa-shopping-bag"></i
                                                    ></a>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-eye"></i
                                                ></a>
                                        </div>
                                        <div class="product-btn">
                                            <a
                                                class="btn -white product__actions__item -round"
                                                href="#"
                                            ><i class="fas fa-heart"></i
                                                ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="paginator">
            <li class="page-item active">
                <button class="page-link">1</button>
            </li>
            <li class="page-item">
                <button class="page-link">2</button>
            </li>
            <li class="page-item">
                <button class="page-link">
                    <i class="far fa-angle-right"></i>
                </button>
            </li>
        </ul>
    </div>
</div>
