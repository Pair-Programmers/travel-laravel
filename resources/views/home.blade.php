@extends('layouts.master')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Wishlist</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Wishlist Section-->
    <section class="wishlist-section">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="wishlist-outer">
                <div class="table-outer">
                    <div class="table-box">
                        <table class="wishlist-table">
                            <tbody>
                                <tr>
                                    <td class="prod-column image-column">
                                        <div class="image-box">
                                            <figure class="prod-thumb"><a href="#"><img src="images/resource/shop/s-cart-thumb.jpg" alt=""></a></figure>
                                        </div>
                                    </td>
                                    <td class="prod-column info-column">
                                        <div class="info-box">
                                            <h4 class="prod-title">Smart Air Bag Travel</h4>
                                            <div class="price">Price : <span>$225.00</span></div>
                                            <div class="date">April 02, 2022</div>
                                        </div>
                                    </td>
                                    <td class="avail">
                                        <div class="yes">In Stock</div>
                                        <div class="add-btn"><a href="#" class="theme-btn add-cart-btn"><span><i class="far fa-shopping-cart"></i> Add To Cart</span></a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="prod-column image-column">
                                        <div class="image-box">
                                            <figure class="prod-thumb"><a href="#"><img src="images/resource/shop/s-cart-thumb.jpg" alt=""></a></figure>
                                        </div>
                                    </td>
                                    <td class="prod-column info-column">
                                        <div class="info-box">
                                            <h4 class="prod-title">Smart Air Bag Travel</h4>
                                            <div class="price">Price : <span>$225.00</span></div>
                                            <div class="date">April 02, 2022</div>
                                        </div>
                                    </td>
                                    <td class="avail">
                                        <div class="yes">In Stock</div>
                                        <div class="add-btn"><a href="#" class="theme-btn add-cart-btn"><span><i class="far fa-shopping-cart"></i> Add To Cart</span></a></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="wishlist-lower clearfix">
                        <div class="left clearfix">
                            <div class="link-title">Wishlist Link</div>
                            <div class="link-form clearfix">
                                <div class="field">
                                    <input type="text" name="coupon-code" value="" placeholder="https://themeforest.net/">
                                </div>
                                <div class="button">
                                    <button type="button" class="theme-btn btn-style-two"><span>Copy Link</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="share clearfix">
                            <div class="share-title">share on : </div>
                            <ul class="share-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Section-->

@endsection
