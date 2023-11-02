<!doctype html>
<html lang="en">
@include('page.layout.head')
<body>
@include('page.layout.header')
<div class="content">
    <div class="shop">
        <div class="container">
            <div class="cart">
                <div class="container">
                    <div class="cart__table">
                        <div class="cart__table__wrapper">
                            <table>
                                <colgroup>
                                    <col style="width: 40%" />
                                    <col style="width: 17%" />
                                    <col style="width: 17%" />
                                    <col style="width: 17%" />
                                    <col style="width: 9%" />
                                </colgroup>
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $item)
                                    <tr>
                                        <td>
                                            <div class="cart-product">
                                                <div class="cart-product__image">
                                                    <img
                                                        src="{{ asset('uploads/' . $item->product->image) }}"
                                                        alt="Product image"
                                                    />
                                                </div>
                                                <div class="cart-product__content">
                                                    <h5>eyes</h5>
                                                    <a href="product-detail.html"
                                                    >{{$item->product->name}}</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
{{--                                        <td>{{$item->product->cost_price}}</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="quantity-controller">--}}
{{--                                                <div class="quantity-controller__btn -descrease">--}}
{{--                                                    ---}}
{{--                                                </div>--}}
{{--                                                <div class="quantity-controller__number">{{$item->quantity}}</div>--}}
{{--                                                <div class="quantity-controller__btn -increase">--}}
{{--                                                    +--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>{{$item->product->cost_price * $item->quantity}}</td>--}}
                                        <td>{{$item->product->cost_price}}</td>
                                        <td>
                                            <div class="quantity-controller">
                                                <div class="quantity-controller__btn -decrease">
                                                    - <!-- Nút giảm số lượng -->
                                                </div>
                                                <div class="quantity-controller__number" data-product-cost="{{$item->product->cost_price}}" data-quantity="{{$item->quantity}}">
                                                    {{$item->quantity}} <!-- Hiển thị số lượng -->
                                                </div>
                                                <div class="quantity-controller__btn -increase">
                                                    + <!-- Nút tăng số lượng -->
                                                </div>
                                            </div>
                                        </td>
                                        <td class="item-total">
                                            {{$item->product->cost_price * $item->quantity}}
                                        </td>

                                        <td>
                                            <a href="#"><i class="fal fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="cart__table__footer">
                            <a href="shop-fullwidth-4col.html"
                            ><i class="fal fa-long-arrow-left"></i>Continue Shopping</a
                            ><a href="#"
                            ><i class="fal fa-trash"></i>Clear Shopping Cart</a
                            >
                        </div>
                    </div>
                    <div class="cart__total">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="cart__total__discount">
                                    <p>Enter coupon code. It will be applied at checkout.</p>
                                    <div class="input-validator">
                                        <form action="">
                                            <input
                                                type="text"
                                                name="discountCode"
                                                placeholder="Your code here"
                                            />
                                            <button class="btn -dark">Apply</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="cart__total__content">
                                    <h3>Cart</h3>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>$169.00</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td class="final-price">$169.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a class="btn -dark" href="/checkout.html"
                                    >Proceed to checkout</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.quantity-controller__btn.-increase').click(function () {
        var quantityElement = $(this).siblings('.quantity-controller__number');
        var currentQuantity = parseInt(quantityElement.data('quantity'));
        var costPrice = parseFloat(quantityElement.data('product-cost'));

        currentQuantity++;
        quantityElement.data('quantity', currentQuantity);
        quantityElement.text(currentQuantity);

        var total = costPrice * currentQuantity;
        $(this).closest('tr').find('.item-total').text(total);
    });

    $('.quantity-controller__btn.-decrease').click(function () {
        var quantityElement = $(this).siblings('.quantity-controller__number');
        var currentQuantity = parseInt(quantityElement.data('quantity'));
        var costPrice = parseFloat(quantityElement.data('product-cost'));

        if (currentQuantity > 1) {
            currentQuantity--;
            quantityElement.data('quantity', currentQuantity);
            quantityElement.text(currentQuantity);

            var total = costPrice * currentQuantity;
            $(this).closest('tr').find('.item-total').text(total);
        }
    });
</script>
@include('page.layout.footer')
@include('page.layout.script')
</body>
</html>
