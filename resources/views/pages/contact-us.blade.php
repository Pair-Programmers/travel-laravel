@extends('layouts.master')

@section('content')
        <!-- Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Contact</h2>
                    <div class="bread-crumb">
                        <ul class="clearfix">
                            <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                            <li class="current">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Contact Section-->
        <section class="contact-section">
            <div class="floated-icon right"><img src="{{ asset('assets/website') }}/images/resource/stones-right-3.svg" alt="" title=""></div>
            <div class="floated-icon right-2"><img src="{{ asset('assets/website') }}/images/resource/stones-right-2.svg" alt="" title=""></div>
            <div class="auto-container">

                <div class="info-section">
                    <div class="row clearfix">
                        <!--Block-->
                        <div class="info-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="map-icon"><img src="{{ asset('assets/website') }}/images/resource/europe-map.svg" alt="" title=""></div>
                                <h5>Europe</h5>
                                <div class="address text">Europe 45 Gloucester Road <br>London T1M 3BF</div>
                                <div class="phone"><a href="tel:+4402036715709">+44 (0)20 3671 5709</a></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="info-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="map-icon"><img src="{{ asset('assets/website') }}/images/resource/asia-map.svg" alt="" title=""></div>
                                <h5>Asia & Pacific</h5>
                                <div class="address text">2473 Red Road Ste 98 <br>Singapore SG</div>
                                <div class="phone"><a href="tel:+16232116319">+ 1 623 211 6319</a></div>
                            </div>
                        </div>
                        <!--Block-->
                        <div class="info-block col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="map-icon"><img src="{{ asset('assets/website') }}/images/resource/north-america-map.svg" alt="" title=""></div>
                                <h5>North America</h5>
                                <div class="address text">Canada 45 Gloucester Road <br>London T1M 3BF</div>
                                <div class="phone"><a href="tel:+45765371319">+ 45 765 371 319</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title-box centered">
                    <h2><span>How can we Help?</span></h2>
                    <div class="text">Contact us and get strapped in for a better adventure experience in your life-time. Just look for opportunity to be with nature. </div>
                </div>
                <div class="form-box site-form">
                    <div class="contact-form">
                        <form method="post" action="contact.html">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Your Name <i>*</i></div>
                                    <div class="field-inner">
                                        <input type="text" name="fieldname" value="" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Your Email <i>*</i></div>
                                    <div class="field-inner">
                                        <input type="email" name="fieldname" value="" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Your Phone <i>*</i></div>
                                    <div class="field-inner">
                                        <input type="text" name="fieldname" value="" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <div class="f-label">Your Subject <i>*</i></div>
                                    <div class="field-inner">
                                        <input type="text" name="fieldname" value="" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <div class="f-label">Write Message</div>
                                    <div class="field-inner">
                                        <textarea name="fieldname" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-two"><span>Submit Now<i class="icon far fa-angle-right"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
