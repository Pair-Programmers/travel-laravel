@extends('layouts.master')

@section('content')
    <!-- Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Booking</h2>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><span class="icon-home fa fa-home"></span><a href="index.html">Home</a></li>
                        <li class="current">Booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Booking Section-->
    <section class="booking-section">
        <div class="floated-icon left"><img src="{{ asset('assets/website') }}/images/resource/stones-left.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('assets/website') }}/images/resource/stones-right-3.svg" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Book This Tour</span></h2>
                <div class="text">Contact us and get strapped in for a better adventure experience in your life-time. Just look for opportunity to be with nature. </div>
            </div>
            <div class="form-box site-form">
                <div class="booking-form">
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
                                <div class="f-label">Country <i>*</i></div>
                                <div class="field-inner">
                                    <select>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Russia</option>
                                        <option>UK</option>
                                        <option>France</option>
                                        <option>Germany</option>
                                    </select>
                                    <span class="alt-icon far fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Choose Time <i>*</i></div>
                                <div class="field-inner">
                                    <select>
                                        <option>10:00 am</option>
                                        <option>11:00 am</option>
                                        <option>12:00 am</option>
                                        <option>01:00 pm</option>
                                        <option>02:00 pm</option>
                                        <option>03:00 pm</option>
                                        <option>04:00 pm</option>
                                        <option>05:00 pm</option>
                                    </select>
                                    <span class="alt-icon far fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Date From <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" class="datepicker" name="fieldname" value="" placeholder="" required>
                                    <span class="alt-icon fal fa-calendar fa-fw"></span>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Number of Guest <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="fieldname" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <div class="f-label">Number of Children <i>*</i></div>
                                <div class="field-inner">
                                    <input type="text" name="fieldname" value="" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <h6>Add Extra</h6>
                                <div class="radio-group">
                                    <div class="radio-block">
                                        <input type="radio" name="radio-1" id="radio-1">
                                        <label for="radio-1">Service per booking</label>
                                    </div>
                                    <div class="radio-block">
                                        <input type="radio" name="radio-1" id="radio-2">
                                        <label for="radio-2">Service per booking</label>
                                    </div>
                                </div>
                                <div class="rates clearfix">
                                    <div class="rate-block">Adult: <span class="price">$120</span></div>
                                    <div class="rate-block">Children: <span class="price">$50</span></div>
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

    <!--FAQs Section-->
    <section class="faq-one alternate">
        <div class="floated-icon left"><img src="{{ asset('assets/website') }}/images/resource/floated-icon-right-2.svg" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('assets/website') }}/images/resource/stones-right-3.svg" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Get Some Important Answer</span></h2>
            </div>
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="accordion-box clearfix">
                            <!--Block-->
                            <div class="accordion block active-block">
                                <div class="acc-btn active">What is Trekking? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do we eat and drink while on trek? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Text Col-->
                <div class="text-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="accordion-box clearfix">
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What is Trekking? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block active-block">
                                <div class="acc-btn active">What do I need to carry? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">How concerned should I be about the altitude? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>
                            <!--Block-->
                            <div class="accordion block">
                                <div class="acc-btn">What do we eat and drink while on trek? <i class="fa-regular fa-angle-down"></i></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">One of the major benefits of trekking is that it improves your physical health immensely. Spending multiple hours on the trail, climbing around boulders, rock hopping and ascending hills gives your whole body a workout, improving your strength, agility and cardio fitness.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sponsors Section-->
    <section class="sponsors-one">
        <div class="auto-container">
            <div class="carousel-box">
                <div class="sponsors-carousel owl-theme owl-carousel">
                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-1.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-2.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-3.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-4.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-1.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-2.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-3.png" alt=""></a></div>
                        </div>
                    </div>

                    <!--Block-->
                    <div class="sponsor-block">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img src="{{ asset('assets/website') }}/images/resource/sponsor-4.png" alt=""></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
