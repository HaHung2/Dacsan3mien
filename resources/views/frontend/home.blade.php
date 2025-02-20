@extends('frontend.layouts.master')

@section('title')
    Trang chủ
@endsection

@section('script_top')
    <link rel="stylesheet" href="/frontend/css/home.css">
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="electronicstore_demo"
  agent-id="65320144-c8c1-4f72-920d-7b68dbe82d41"
  language-code="vi"
></df-messenger>
@endsection

@section('content')
    <section class="slider-area ptb-30 white-bg">
        <div class="container">
            <div class="row">
                <!--Slider Start-->
                <div class="col-lg-12 col-md-12">
                    <div class="slider-wrapper theme-default">
                        <!--Slider Background Image Start-->
                        <div id="slider" class="nivoSlider">
                            <img src="frontend/images/Yellow_Simple _Food_Menu_Banner.png" alt title="#htmlcaption" class="img-fluid">
{{--                            <img src="frontend/images/2_1.jpg" alt title="#htmlcaption2" class="img-fluid">--}}
                        </div>
                        <!--Slider Background Image End-->
                        <!--1st Slider Caption Start-->
                        <div id="htmlcaption" class="nivo-html-caption">
                            <div class="slider-caption">
                                <div class="slider-text">
{{--                                    <h5 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">--}}
{{--                                        Xu hướng công nghệ </h5>--}}
{{--                                    <h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">--}}
{{--                                        VR<br></h1>--}}
{{--                                    <h4 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">--}}
{{--                                        Chỉ từ <span>400.000 ₫</span></h4>--}}
{{--                                    <div class="slider-button">--}}
{{--                                        <a href="{{ route('frontend.category', 'kinh-thuc-te-ao') }}"--}}
{{--                                           class="wow button animated fadeInLeft" data-text="Shop now"--}}
{{--                                           data-wow-duration="2.5s" data-wow-delay="0.5s">Mua ngay</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                        <!--1st Slider Caption End-->
                        <!--2nd Slider Caption Start-->
{{--                        <div id="htmlcaption2" class="nivo-html-caption">--}}
{{--                            <div class="slider-caption">--}}
{{--                                <div class="slider-text">--}}
{{--                                    <h5 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">--}}
{{--                                        Giảm giá sốc 40% </h5>--}}
{{--                                    <h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">--}}
{{--                                        Gone <br>X7/X7 edge 2018</h1>--}}
{{--                                    <h4 class="wow animated fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">--}}
{{--                                        Khởi điểm <span>400.000 ₫</span></h4>--}}
{{--                                    <div class="slider-button">--}}
{{--                                        <a href="{{ route('frontend.category', 'dien-thoai') }}"--}}
{{--                                           class="wow button animated fadeInLeft" data-text="Shop now"--}}
{{--                                           data-wow-duration="2.5s" data-wow-delay="0.5s">Mua ngay</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!--2nd Slider Caption End-->
                    </div>
                </div>
                <!--Slider End-->
                <!--Offer Image Start-->
{{--                <div class="col-lg-3 col-md-3">--}}
{{--                    <div class="single-offer mb-20">--}}
{{--                        <div class="offer-img img-full">--}}
{{--                            <a href="{{ route('frontend.category', 'tay-cam-choi-game') }}"><img src="frontend/images/1_6.jpg" alt></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="offer">--}}
{{--                        <div class="offer-img2 img-full">--}}
{{--                            <a href="#"><img src="frontend/images/2.jpg" alt></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--Offer Image End-->
            </div>
        </div>
    </section>
    <!--Slider Area End-->
    <!--Corporate About Start-->
    <section class="corporate-about white-bg pb-30">
        <div class="container">
            <div class="row all-about no-gutters">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-about">
                        <div class="block-wrapper">
                            <div class="about-content">
                                <h5>Giao hàng nhanh</h5>
                                <p>Mọi lúc, mọi nơi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-about">
                        <div class="block-wrapper2">
                            <div class="about-content">
                                <h5>Tư vấn</h5>
                                <p>24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-about">
                        <div class="block-wrapper3">
                            <div class="about-content">
                                <h5>Tiết kiệm</h5>
                                <p>Tích lũy xu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-about not-border">
                        <div class="block-wrapper4">
                            <div class="about-content">
                                <h5>Giảm giá</h5>
                                <p>Khách hàng thân thiết</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Corporate About End-->
    <!--All Product Area Start-->
    <section class="all-product-area pt-100 product_res">
        <div class="container">
            <div class="row">
                <!--Left Side Product Start-->
                <div class="col-lg-9 col-md-9">
                    <div class="desktop-television-product">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Section Title1 Start-->
                                <div class="section-title1-border">
                                    <div class="section-title1">
                                        <h3>Đặc sản núi rừng</h3>
                                    </div>
                                </div>
                                <!--Section Title1 End-->
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="amply" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="all-product mb-85 owl-carousel">
                                        @foreach($phones as $product)
                                            @if(count($product->images)>0)
                                                <div class="col-lg-12 item-col">
                                                    <div class="single-product border" style="height: 100%;">
                                                        <div class="product-img img-product-size border" >
                                                            <a href="{{ route('frontend.product.show', $product->slug) }}">
                                                                 <img class="first-img img-fluid"
                                                                     src="{{ $product->images[0]->image_url }}"
                                                                     alt="anh"
                                                                     style="max-width: 100%; max-height: 100%; object-fit: cover; ">
                                                            </a>
                                                           
                                                        </div>
                                                        <div class="product-content product-height">
                                                            <h2 style="height:40px; width: 90%; margin: 0 auto;">
                                                                <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->name }}</a>
                                                            </h2>
                                                            <div class="product-price" style="height: 35%;">
                                                                <p class="new-price">{{ number_format($product->sale_price, 0, '.', '.') }} <b>₫</b></p>
                                                                <a class="button text-white addToCart"
                                                                   onclick="addToCart({{ $product->id }})"><i
                                                                        class="fas fa-cart-plus"></i> Thêm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product Tab End-->
                        <!--Offer Image Start-->
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="single-offer">--}}
{{--                                    <div class="offer-img img-full">--}}
{{--                                        <a href="{{ route('frontend.category', 'dac-san-nui-rung') }}"><img--}}
{{--                                                src="frontend/images/3_2.jpg" alt></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!--Offer Image End-->
                    </div>
                    <!--Desktop & Television Product End-->
                    <!--Smartphone & Tablet Product Start-->
                    <div class="smartphone-tablet-product product_res">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Section Title1 Start-->
                                <div class="section-title1-border">
                                    <div class="section-title1">
                                        <h3>Đặc sản sông biển</h3>
                                    </div>
                                </div>
                                <!--Section Title1 End-->
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="amply" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="all-product mb-85  owl-carousel">
                                        @foreach($laptops as $product)
                                            @if(count($product->images)>0)
                                                <div class="col-lg-12 item-col">
                                                    <div class="single-product border" style="height: 100%;">
                                                        <div class="product-img img-product-size border" >
                                                            <a href="{{ route('frontend.product.show', $product->slug) }}"> 
                                                                 <img class="first-img img-fluid"
                                                                     src="{{ $product->images[0]->image_url }}"
                                                                     alt="anh"
                                                                     style="max-width: 100%; max-height: 100%; object-fit: cover;">
                                                            </a>
                                                           
                                                        </div>
                                                        <div class="product-content product-height">
                                                            <h2 style="height:40px; width: 90%; margin: 0 auto;">
                                                                <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->name }}</a>
                                                            </h2>
                                                            <div class="product-price" style="height: 35%;">
                                                                <p class="new-price">{{ number_format($product->sale_price, 0, '.', '.') }} <b>₫</b></p>
                                                                <a class="button  text-white addToCart"
                                    
                                                                   onclick="addToCart({{ $product->id }})"><i
                                                                        class="fas fa-cart-plus"></i> Thêm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product Tab End-->
                        <!--Offer Image Start-->
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="single-offer">--}}
{{--                                    <div class="offer-img img-full">--}}
{{--                                        <a href="{{ route('frontend.category', 'dac-san-nui-rung') }}"><img--}}
{{--                                                src="frontend/images/4_1.jpg" alt></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!--Offer Image End-->
                    </div>
                    <!--Smartphone & Tablet Product End-->
                    <!--Electronics Product Start-->
                    <div class="electronics-product product_res">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Section Title1 Start-->
                                <div class="section-title1-border">
                                    <div class="section-title1">
                                        <h3>Nông sản</h3>
                                    </div>
                                </div>
                                <!--Section Title1 End-->
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="amply" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="all-product mb-85  owl-carousel">
                                        @foreach($tablets as $product)
                                            @if(count($product->images)>0)
                                                <div class="col-lg-12 item-col ">
                                                    <div class="single-product border" style="height: 100%;" >
                                                        <div class="product-img img-product-size border">
                                                            <a href="{{ route('frontend.product.show', $product->slug) }}">   
                                                                   <img class="first-img img-fluid"
                                                                     src="{{ $product->images[0]->image_url }}"
                                                                     alt="anh"
                                                                     style="max-width: 100%; max-height: 100%; object-fit: cover;">
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="product-content product-height">
                                                            <h2 style="height:40px; width: 90%; margin: 0 auto;">
                                                                <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->name }}</a>
                                                            </h2>
                                                            <div class="product-price" style="height: 35%;">
                                                                <p class="new-price">{{ number_format($product->sale_price, 0, '.', '.') }} <b>₫</b></p>
                                                                <a class="button  text-white addToCart"
                                        
                                                                   onclick="addToCart({{ $product->id }})"><i
                                                                        class="fas fa-cart-plus"></i> Thêm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product Tab End-->
                        <!--Offer Image Start-->
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="single-offer">--}}
{{--                                    <div class="offer-img img-full">--}}
{{--                                        <a href="{{ route('frontend.category', 'tablet') }}"><img--}}
{{--                                                src="frontend/images/5_1.jpg" alt></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!--Offer Image End-->
                    </div>
                    <!--Electronics Product End-->
                    <!--Bestseller Product Start-->
                    <div class="bestseller-product product_res pb-85">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--Section Title1 Start-->
                                <div class="section-title1-border">
                                    <div class="section-title1">
                                        <h3>Ngũ cốc dinh dưỡng</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Best Sell Product Start-->
                        <div class="tab-content">
                            <div id="amply" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="all-product mb-85  owl-carousel">
                                        @foreach($clocks as $product)
                                            @if(count($product->images)>0)
                                                <div class="col-lg-12 item-col">
                                                    <div class="single-product border" style="height: 100%;">
                                                        <div class="product-img img-product-size border" >
                                                            <a href="{{ route('frontend.product.show', $product->slug) }}">
                                                                <img class="first-img img-fluid"
                                                                     src="{{ $product->images[0]->image_url }}"
                                                                     alt="anh"
                                                                     style="max-width: 100%; max-height: 100%; object-fit: cover;">
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="product-content product-height">
                                                            <h2 style="height:40px; width: 90%; margin: 0 auto;">
                                                                <a href="{{ route('frontend.product.show', $product->id) }}">{{ $product->name }}</a>
                                                            </h2>
                                                            <div class="product-price" style="height: 35%;">
                                                                <p class="new-price">{{ number_format($product->sale_price, 0, '.', '.') }} <b>₫</b></p>
                                                                <a class="button  text-white addToCart"
                                                                   onclick="addToCart({{ $product->id }})"><i
                                                                        class="fas fa-cart-plus"></i> Thêm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Best Sell Product End-->
                    </div>
                    <!--Bestseller Product End-->
                </div>
                <!--Left Side Product End-->
                <!--Right Side Product Start-->
                <div class="col-lg-3 col-md-3">
                    <div class="new-arrivals-product mb-50">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="new-arrivals-product-title">
                                    <!--Section Title2 Start-->
                                    <div class="section-title2">
                                        <h3>Sản phẩm mới</h3>
                                    </div>

                                    <div class="hot-del-single-product">
                                        <div class="row slide-active2">
                                            @foreach($products as $product)
                                                @if(count($product->images)>0)
                                                    <div class="col-lg-12">
                                                        <div class="row no-gutters single-product style-2 list">
                                                            <div class="col-4">
                                                                <div class="product-img">
                                                                    <a href="{{ route('frontend.product.show', $product->slug) }}">
                                                                        <img class="first-img img-fluid"
                                                                             src="{{ $product->images[0]->image_url }}"
                                                                             alt>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="product-content">
                                                                    <h2>
                                                                        <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->name }}</a>
                                                                    </h2>
                                                                    <div class="product-price">
                                                                        <span class="new-price">{{ number_format($product->sale_price, 0, '.', '.') }} <b>₫</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    <div class="offer-img-area pb-50">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="single-offer mb-20">--}}
{{--                                    <div class="offer-img img-full">--}}
{{--                                        <a href="{{ route('frontend.category', 'tablet') }}"><img--}}
{{--                                                src="frontend/images/8_1.jpg" alt></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-offer mb-20">--}}
{{--                                    <div class="offer-img img-full">--}}
{{--                                        <a href="{{ route('frontend.category', 'dong-ho') }}"><img--}}
{{--                                                src="frontend/images/9_1.jpg" alt></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-offer">--}}
{{--                                    <div class="offer-img img-full">--}}
{{--                                        <a href="{{ route('frontend.category', 'tai-nghe') }}"><img--}}
{{--                                                src="frontend/images/10.jpg" alt></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!--All Product Area End-->
    <!--Offer Image Area Start-->
{{--    <div class="offer-img-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <div class="single-offer">--}}
{{--                        <div class="offer-img img-full">--}}
{{--                            <a href="{{ route('frontend.category', 'tai-nghe') }}"><img src="frontend/images/6_1.jpg"--}}
{{--                                                                                        alt></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <div class="single-offer">--}}
{{--                        <div class="offer-img img-full">--}}
{{--                            <a href="{{ route('frontend.category', 'dien-thoai') }}"><img src="frontend/images/7_1.jpg"--}}
{{--                                                                                          alt></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <section class="all-slide-product product_res">
        <div class="container">
            <div class="row">
                {{-- -- <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--Section Title2 Start-->
                            <div class="section-title2">
                                <h3>Hải sản Bạch Long Vĩ</h3>
                            </div>
                            <!--Section Title2 End-->
                        </div>
                    </div>
                    <!--Special Single Product Start-->
                    <div class="hot-del-single-product">
                        <div class="row">
                            <div class="slide-active3">
                                @foreach($batterys as $product)
                                    @if(count($product->images)>0)
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2 list">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="{{ route('frontend.product.show', $product->slug) }}">
                                                            <img class="first-img img-fluid heimg"
                                                                 src="{{ $product->images[0]->image_url }}"
                                                                 alt>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2>
                                                            <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->name }}</a>
                                                        </h2>
                                                        <div class="product-price">
                                                            <span class="new-price">{{ number_format($product->sale_price, 0, '.', '.') }} <b>₫</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--Special Single Product Start-->
                </div>  --}}
                <!--Single Slide Product Start-->
                <!--Single Slide Product Start-->
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--Section Title2 Start-->
                            <div class="section-title2">
                                <h3>Đặc sản bánh kẹo</h3>
                            </div>
                            <!--Section Title2 End-->
                        </div>
                    </div>
                    <!--New Arrivals Single Product Start-->
                    <div class="hot-del-single-product">
                        <div class="row">
                            <div class="slide-active3">
                                @foreach($cables as $product)
                                    @if(count($product->images)>0)
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2 list">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="{{ route('frontend.product.show', $product->slug) }}">
                                                            <img class="first-img img-fluid heimg"
                                                                 src="{{ $product->images[0]->image_url }}"
                                                                 alt>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2>
                                                            <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->name }}</a>
                                                        </h2>
                                                        <div class="product-price">
                                                            <span class="new-price">{{ number_format($product->sale_price, 0, '.', '.') }} <b>₫</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--New Arrivals Single Product Start-->
                </div>
                <!--Single Slide Product Start-->
                <!--Single Slide Product Start-->
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <!--Section Title2 Start-->
                            <div class="section-title2">
                                <h3>Thảo dược quý</h3>
                            </div>
                            <!--Section Title2 End-->
                        </div>
                    </div>
                    <!--On Sale Single Product Start-->
                    <div class="hot-del-single-product">
                        <div class="row">
                            <div class="slide-active3">
                                @foreach($speaks as $product)
                                    @if(count($product->images)>0)
                                        <div class="col-lg-12">
                                            <div class="row no-gutters single-product style-2 list">
                                                <div class="col-4">
                                                    <div class="product-img">
                                                        <a href="{{ route('frontend.product.show', $product->slug) }}">
                                                            <img class="first-img img-fluid heimg"
                                                                 src="{{ $product->images[0]->image_url }}"
                                                                 alt>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product-content">
                                                        <h2>
                                                            <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->name }}</a>
                                                        </h2>
                                                        <div class="product-price">
                                                            <span class="new-price">{{ number_format($product->sale_price, 0, '.', '.') }} <b>₫</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--On Sale Single Product Start-->
                </div>
                <!--Single Slide Product Start-->
            </div>
        </div>
    </section>
    <!--All Slide Product Area End-->
    <!--Brand Area Start-->
    <div class="brand-area ptb-30 white-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-active owl-carousel">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function addToCart(id) {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{ route('frontend.cart.add') }}',
                method: 'POST',
                dataType: 'JSON',
                data: {id: id, _token: _token},
                success: function (data) {
                    swal("Thêm thành công", "Xem chi tiết trong giỏ hàng", "success");
                },
                error: function () {
                    swal("Thêm không thành công", "Không đủ sản phẩm", "error");
                }
            });
        };
    </script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
@endsection
