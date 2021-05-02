@extends('frontend.layoutsproduct.design')

@section('title')
    Chi tiết sản phẩm
@endsection

@section('content')
    <!-- Start Product Details -->
    <section class="htc__product__details pt--120 pb--100 bg__white">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="product__details__container">
                        <!-- Start Small images -->
                        <ul class="product__small__images" role="tablist">
                            @foreach($productDetailsImageAlls as $key => $productDetailsAll)
                            <li role="presentation" class="pot-small-img {{$key == 0 ? 'active' : ''}}">
                                <a href="#img-tab-{{$key}}" role="tab" data-toggle="tab">
                                    <img src = "{{asset('img/frontend/product/all/'.$productDetailsAll)}}" alt="small-image" style="width: 120px;height: 140px">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <!-- End Small images -->

                        <div class="product__big__images">
                            <div class="portfolio-full-image tab-content">
                                @foreach($productDetailsImageAlls as $key => $productDetailsAll)
                                <div role="tabpanel" class="tab-pane  {{$key == 0 ? 'fade in active' : ''}} product-video-position" id="img-tab-{{$key}}">
                                    <img src = "{{asset('img/frontend/product/all/'.$productDetailsAll)}}" alt="full-image">
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                    <div class="htc__product__details__inner">
                        <div class="pro__detl__title">
                            <h2>{{$productDetails->ten_san_pham}}</h2>
                        </div>
                        <div class="pro__dtl__rating">
                            <ul class="pro__rating">
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                                <li><span class="ti-star"></span></li>
                            </ul>
                            <span class="rat__qun"></span>
                        </div>
                        <div class="pro__details">
                            <p>{{$productDetails->mo_ta}}</p>
                        </div>
                        <ul class="pro__dtl__prize">
                            <li class="old__prize">{{number_format(($productDetails->gia_san_pham)*0.1, 0, '', '.') }}&nbsp;đ</li>
                            <li>{{number_format($productDetails->gia_san_pham, 0, '', '.') }}&nbsp;đ</li>
                        </ul>
                        <div class="pro__dtl__color">
                            <h2 class="title__5">Chọn màu sắc</h2>
                            <ul class="pro__choose__color">
                                <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i></a></li>
                                <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i></a></li>
                                <li class="perpal"><a href="#"><i class="zmdi zmdi-circle"></i></a></li>
                                <li class="yellow"><a href="#"><i class="zmdi zmdi-circle"></i></a></li>
                            </ul>
                        </div>
                        <div class="pro__dtl__size">
                            <h2 class="title__5">Kích thước</h2>
{{--                            <ul class="pro__choose__size">--}}
{{--                                <li><a href="#">xl</a></li>--}}
{{--                                <li><a href="#">m</a></li>--}}
{{--                                <li><a href="#">ml</a></li>--}}
{{--                                <li><a href="#">lm</a></li>--}}
{{--                                <li><a href="#">xxl</a></li>--}}
{{--                            </ul>--}}
                        </div>
                        <div class="product-action-wrap">
                            <div class="prodict-statas"><span>Số lượng :</span></div>
                            <div class="product-quantity">
                                <form id='myform' method='POST' action='#'>
                                    <div class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <ul class="pro__dtl__btn">
                            <li class="buy__now__btn"><a href="#">buy now</a></li>
                            <li><a href="#"><span class="ti-heart"></span></a></li>
                            <li><a href="#"><span class="ti-email"></span></a></li>
                        </ul>
                        <div class="pro__social__share">
                            <h2>Chia sẻ :</h2>
                            <ul class="pro__soaial__link">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Details -->
    <!-- Start Product tab -->
    <section class="htc__product__details__tab bg__white pb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="product__deatils__tab mb--60" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#description" role="tab" data-toggle="tab">Mô tả</a>
                        </li>
                        <li role="presentation">
                            <a href="#sheet" role="tab" data-toggle="tab">Thông số kỹ thuật</a>
                        </li>
                        <li role="presentation">
                            <a href="#reviews" role="tab" data-toggle="tab">Đánh giá</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product__details__tab__content">
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="description" class="product__tab__content fade in active">
                            <div class="product__description__wrap">
                                <div class="product__desc">
                                    <h2 class="title__6">Mô tả Chi tiết</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noexercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
                                </div>
                                <div class="pro__feature">
                                    <h2 class="title__6">Features</h2>
                                    <ul class="feature__list">
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                                        <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="sheet" class="product__tab__content fade">
                            <div class="pro__feature">
                                <h2 class="title__6">Thông số</h2>
                                <table id="tablepress-33" >
                                    <tbody >
                                    <tr class="row-1">
                                        <td class="column-1"><p style="text-align: center;color: #ffffff;"><strong> KHUNG XE</strong> </p></td><td class="column-2"></td>
                                    </tr>
                                    <tr class="row-2">
                                        <td class="column-1">Sơn</td><td class="column-2">Tĩnh Điện</td>
                                    </tr>
                                    <tr class="row-3">
                                        <td class="column-1">Tem </td><td class="column-2">Dán</td>
                                    </tr>
                                    <tr class="row-4">
                                        <td class="column-1">Màu </td><td class="column-2">Xanh, Đỏ, Lá, Hồng</td>
                                    </tr>
                                    <tr class="row-5">
                                        <td class="column-1">Khung </td><td class="column-2">Hợp Kim Thép</td>
                                    </tr>
                                    <tr class="row-6">
                                        <td class="column-1">Phuộc </td><td class="column-2">Hợp Kim Thép</td>
                                    </tr>
                                    <tr class="row-7" style="background:#7f7f7f">
                                        <td class="column-1"><p style="text-align: center;color: #ffffff;"><strong>Phụ tùng</strong> </p></td><td class="column-2"></td>
                                    </tr>
                                    <tr class="row-8">
                                        <td class="column-1">Tay lái </td><td class="column-2">Hợp kim thép</td>
                                    </tr>
                                    <tr class="row-9">
                                        <td class="column-1">Cổ lái, Pô tăng </td><td class="column-2">Hợp kim thép, thiết kế độc đáo có thể thay đổi chiều cao tay lái phù hợp với trẻ</td>
                                    </tr>
                                    <tr class="row-10">
                                        <td class="column-1">Cốt yên </td><td class="column-2">Hợp kim thép, thiết kế độc đáo có thể thay đổi chiều cao tay lái phù hợp với trẻ</td>
                                    </tr>
                                    <tr class="row-11">
                                        <td class="column-1">Yên </td><td class="column-2">Nệm</td>
                                    </tr>
                                    <tr class="row-12">
                                        <td class="column-1">Bàn đạp </td><td class="column-2">Cốt thép bọc nhựa </td>
                                    </tr>
                                    <tr class="row-13">
                                        <td class="column-1"><p style="text-align: center;color: #ffffff;"><strong> BỘ TRUYỀN ĐỘNG</strong> </p></td><td class="column-2"></td>
                                    </tr>
                                    <tr class="row-14">
                                        <td class="column-1">Thắng </td><td class="column-2">Thắng cụm chữ V - Thắng Đùm</td>
                                    </tr>
                                    <tr class="row-15">
                                        <td class="column-1">Tay thắng</td><td class="column-2">Nhựa cao cấp</td>
                                    </tr>
                                    <tr class="row-16">
                                        <td class="column-1">Bộ tăng tốc trước </td><td class="column-2">N/A</td>
                                    </tr>
                                    <tr class="row-17">
                                        <td class="column-1">Bộ tăng tốc trước</td><td class="column-2">N/A</td>
                                    </tr>
                                    <tr class="row-18">
                                        <td class="column-1">Tay nắm sang số</td><td class="column-2">N/A</td>
                                    </tr>
                                    <tr class="row-19">
                                        <td class="column-1">Bộ giò dĩa</td><td class="column-2">Hợp kim thép</td>
                                    </tr>
                                    <tr class="row-20">
                                        <td class="column-1">Líp xe </td><td class="column-2">N/A</td>
                                    </tr>
                                    <tr class="row-21">
                                        <td class="column-1">Sên xe </td><td class="column-2">N/A</td>
                                    </tr>
                                    <tr class="row-22">
                                        <td class="column-1">Trục giữa</td><td class="column-2">N/A</td>
                                    </tr>
                                    <tr class="row-23">
                                        <td class="column-1"><p style="text-align: center;color: #ffffff;"><strong> HỆ THỐNG BÁNH<br>
                                                </strong> </p></td><td class="column-2"></td>
                                    </tr>
                                    <tr class="row-24">
                                        <td class="column-1">Niềng xe </td><td class="column-2">Hợp kim nhôm</td>
                                    </tr>
                                    <tr class="row-25">
                                        <td class="column-1">Đùm xe</td><td class="column-2">Hợp kim thép</td>
                                    </tr>
                                    <tr class="row-26">
                                        <td class="column-1">Căm xe </td><td class="column-2">Hợp kim thép</td>
                                    </tr>
                                    <tr class="row-27">
                                        <td class="column-1">Vỏ ruột</td><td class="column-2">Cao su, bánh hơi</td>
                                    </tr>
                                    <tr class="row-28">
                                        <td class="column-1">Bánh xe phụ </td><td class="column-2">Bánh nhựa</td>
                                    </tr>
                                    <tr class="row-29">
                                        <td class="column-1"><p style="text-align: center;color: #ffffff;"><strong> KÍCH THƯỚC <br>
                                                </strong> </p></td><td class="column-2"></td>
                                    </tr>
                                    <tr class="row-30">
                                        <td class="column-1">Cân nặng </td><td class="column-2">9 Kg</td>
                                    </tr>
                                    <tr class="row-31">
                                        <td class="column-1">Tải trọng</td><td class="column-2">60 Kg</td>
                                    </tr>
                                    <tr class="row-32">
                                        <td class="column-1"><p style="text-align: center;color: #ffffff;"><strong> PHỤ KIỆN<br>
                                                </strong> </p></td><td class="column-2"></td>
                                    </tr>
                                    <tr class="row-33">
                                        <td class="column-1">Phụ Kiện</td><td class="column-2">N/A</td>
                                    </tr>
                                    <tr class="row-34">
                                        <td class="column-1"><p style="text-align: center;color: #ffffff;"><strong> LƯU Ý! <br>
                                                </strong> </p></td><td class="column-2"></td>
                                    </tr>
                                    <tr class="row-35">
                                        <td class="column-1">***</td><td class="column-2">Hàng chính hãng, nhập khẩu và phân phối bởi Xe Đạp Giá Kho.<br>
                                            Các chi tiết sản phẩm có thể thay đổi mà không cần báo trước.</td>
                                    </tr>
                                    <tr class="row-36">
                                        <td class="column-1">Danh mục</td><td class="column-2">Xe Đạp Trẻ Em</td>
                                    </tr>
                                    <tr class="row-37">
                                        <td class="column-1">Tag</td><td class="column-2">xe dap tre em savales</td>
                                    </tr>
                                    <tr class="row-38">
                                        <td class="column-1">Link</td><td class="column-2"><a href="https://xedapgiakho.com/?s=16b109&amp;post_type=product" rel="noopener noreferrer" target="_blank">https://xedapgiakho.com/ Xedap16inchsavales</a></td>
                                    </tr>
                                    <tr class="row-39">
                                        <td class="column-1">Youtube</td><td class="column-2">N/A</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div role="tabpanel" id="reviews" class="product__tab__content fade">
                            <div class="review__address__inner">
                                <!-- Start Single Review -->
                                <div class="pro__review">
                                    <div class="review__thumb">
                                        <img src="images/review/1.jpg" alt="review images">
                                    </div>
                                    <div class="review__details">
                                        <div class="review__info">
                                            <h4><a href="#">Gerald Barnes</a></h4>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                            </ul>
                                            <div class="rating__send">
                                                <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="review__date">
                                            <span>27 Jun, 2016 at 2:30pm</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                                <!-- Start Single Review -->
                                <div class="pro__review ans">
                                    <div class="review__thumb">
                                        <img src="images/review/2.jpg" alt="review images">
                                    </div>
                                    <div class="review__details">
                                        <div class="review__info">
                                            <h4><a href="#">Gerald Barnes</a></h4>
                                            <ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                                <li><i class="zmdi zmdi-star-half"></i></li>
                                            </ul>
                                            <div class="rating__send">
                                                <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="review__date">
                                            <span>27 Jun, 2016 at 2:30pm</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                            </div>
                            <!-- Start RAting Area -->
                            <div class="rating__wrap">
                                <h2 class="rating-title">Write  A review</h2>
                                <h4 class="rating-title-2">Your Rating</h4>
                                <div class="rating__list">
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                    <!-- Start Single List -->
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                        <li><i class="zmdi zmdi-star-half"></i></li>
                                    </ul>
                                    <!-- End Single List -->
                                </div>
                            </div>
                            <!-- End RAting Area -->
                            <div class="review__box">
                                <form id="review-form">
                                    <div class="single-review-form">
                                        <div class="review-box name">
                                            <input type="text" placeholder="Type your name">
                                            <input type="email" placeholder="Type your email">
                                        </div>
                                    </div>
                                    <div class="single-review-form">
                                        <div class="review-box message">
                                            <textarea placeholder="Write your review"></textarea>
                                        </div>
                                    </div>
                                    <div class="review-btn">
                                        <a class="fv-btn" href="#">submit review</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product tab -->
@endsection
