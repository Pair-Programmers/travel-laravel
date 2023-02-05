@extends('layouts.master')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{asset('assets/website') }}/images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Wishlist</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="{{route('home')}}">Home</a></li>
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
                                @foreach ($myWishlistItems as $item)
                                <tr>
                                    <td class="prod-column image-column">
                                        <div class="image-box">
                                            <figure class="prod-thumb"><a href="#"><img src="{{asset('assets/website') }}/images/resource/shop/s-cart-thumb.jpg" alt=""></a></figure>
                                        </div>
                                    </td>
                                    <td class="prod-column info-column">
                                        <div class="info-box">
                                            <h4 class="prod-title">{{$item->tour->name}}</h4>
                                            <div class="price">Price : <span>${{$item->tour->price}}</span></div>
                                            <div class="date">Last Date:  {{$item->tour->last_booking_date}}</div>
                                        </div>
                                    </td>
                                    <td class="avail">
                                        <div class="add-btn"><a href="{{ route('wishlist.destroy', $item->id) }}" class="theme-btn add-cart-btn"><span><i class="far fa-shopping-cart"></i>Remove</span></a></div>
                                    </td>
                                </tr>
                                @endforeach
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
