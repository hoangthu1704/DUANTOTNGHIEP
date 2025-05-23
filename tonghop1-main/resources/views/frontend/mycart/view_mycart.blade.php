@extends('frontend.master_dashboard')
@section('main')
@section('title')
MyCart Page
@endsection

<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Cart
        </div>
    </div>
</div>
<div class="container mb-80 mt-50">
    <div class="row">
        <div class="col-lg-8 mb-40">
            <h4 class="heading-2 mb-10">Your Cart</h4>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are products in your cart</h6>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive shopping-summery">
                <table class="table table-wishlist">
                    <thead>
                        <tr class="main-heading">
                            <th class="custome-checkbox start pl-30">

                            </th>
                            <th scope="col" colspan="2">Product</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col" class="end">Remove</th>
                        </tr>
                    </thead>
                    <tbody id="cartPage">
                        <tr class="pt-30">
                            <td class="custome-checkbox pl-30">

                            </td>
                            <td class="image product-thumbnail pt-40"><img src="/upload/products/thambnail/1740389527616484.webp " alt="#"></td>
                            <td class="product-des product-name">
                                <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="shop-product-right.html">Color Block Men Hooded Neck Red </a></h6>

                            </td>
                            <td class="price" data-title="Price">
                                <h4 class="text-body">$400 </h4>
                            </td>

                            <td class="price" data-title="Price">
                                <h6 class="text-body">Red </h6>
                            </td>

                            <td class="price" data-title="Price">
                                <h6 class="text-body">Small </h6>
                            </td>


                            <td class="text-center detail-info" data-title="Stock">
                                <div class="detail-extralink mr-15">
                                    <div class="detail-qty border radius">

                                        <a type="submit" class="qty-down" id="e5c76720323ef976275d4d4a34698675" onclick="cartDecrement(this.id)"><i class="fi-rs-angle-small-down"></i></a>

                                        <input type="text" name="quantity" class="qty-val" value="1" min="1">

                                        <a type="submit" class="qty-up" id="e5c76720323ef976275d4d4a34698675" onclick="cartIncrement(this.id)"><i class="fi-rs-angle-small-up"></i></a>

                                    </div>
                                </div>
                            </td>
                            <td class="price" data-title="Price">
                                <h4 class="text-brand">$400 </h4>
                            </td>
                            <td class="action text-center" data-title="Remove">
                                <a type="submit" class="text-body" id="e5c76720323ef976275d4d4a34698675" onclick="cartRemove(this.id)"><i class="fi-rs-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="row mt-50">
                <div class="col-lg-5">


                    <div class="p-40" id="couponField">
                        <h4 class="mb-10">Apply Coupon</h4>
                        <p class="mb-30"><span class="font-lg text-muted">Using A Promo Code?</span></p>
                        <form action="#">
                            <div class="d-flex justify-content-between">

                                <input class="font-medium mr-15 coupon" id="coupon_name" placeholder="Enter Your Coupon">

                                <a type="submit" onclick="applyCoupon()" class="btn btn-success"><i class="fi-rs-label mr-10"></i>Apply</a>
                            </div>
                        </form>
                    </div>


                </div>




                <div class="col-lg-7">
                    <div class="divider-2 mb-30"></div>



                    <div class="border p-md-4 cart-totals ml-30">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <tbody id="couponCalField">
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Subtotal</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">$400.00</h4>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Grand Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">$400.00</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="https://digi-poly.id.vn/checkout" class="btn mb-20 w-100">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>




@endsection