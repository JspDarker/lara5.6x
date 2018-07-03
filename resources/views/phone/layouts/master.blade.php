<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/sf.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tgdd.css') }}">
    @yield('styles')
    <style type="text/css">
        #main-products{
            margin-top: 60px;
        }
        .head-border {
            border-bottom: 5px solid aqua;
        }
    </style>
</head>
<body>

    <section class=" ">
        <div id="main-header">
            @include('phone.includes.header')
        </div>

        <div id="main-products">

            <div class="navigat">
                <h2>Product Best Special</h2>
                <div class="viewallcat">
                    <a href="https://www.thegioididong.com/dtdd-apple-iphone">Laptop</a>
                    <a href="https://www.thegioididong.com/dtdd-samsung">Phone</a>
                    <a href="http://thegioididong.com/dtdd?f=man-hinh-tran-vien">Tablet</a>
                    <a href="https://www.thegioididong.com/dtdd?p=tu-3-5-trieu">More</a>
                    <a href="https://www.thegioididong.com/dtdd?s=tra-gop-0-phan-tram">Promotion price</a>
                    <a href="/dtdd" class="mobile">Xem tất cả điện thoại</a>
                </div>
            </div>

            <!-- home products -->
            <ul class="homeproduct ">
                <li class="feature" data-id="160729">

                    <a href="/dtdd/samsung-galaxy-j6">
                        <img width="600" height="275" src="https://cdn4.tgdd.vn/Products/Images/42/160729/Feature/samsung-galaxy-j6-14.jpg">
                        <h3>Samsung Galaxy J6</h3>
                        <div class="price"><strong>5.290.000₫</strong></div>
                        <label class="installment">Trả góp 0%</label>
                    </a>

                </li>
                <li data-id="157031">
                    <!--#region Ngành hàng chính -->
                    <a href="/dtdd/samsung-galaxy-a6-2018" >
                        <img width="180px" height="180px" src="https://cdn1.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-2-600x600.jpg" >
                        <h3>Samsung Galaxy A6 (2018)</h3>
                        <div class="price"><strong>6.990.000₫</strong></div>
                        <div class="promo">
                            <img width="30" height="30" data-original="https://cdn2.tgdd.vn/Products/Images/2102/121752/phieu-mua-hang-400000d-1-100x100.jpg" class="lazy">
                            <p>Tặng Phiếu mua h&#224;ng 400.000đ và <b>3 K.mãi</b> khác</p>
                        </div>

                        <label class="installment">Trả góp 0%</label>
                    </a>
                    <!--#endregion -->

                </li>
                <li data-id="153963">
                    <!--#region Ngành hàng chính -->
                    <a href="/dtdd/samsung-galaxy-j4" >
                        <img width="180" height="180" data-original="https://cdn3.tgdd.vn/Products/Images/42/153963/samsung-galaxy-j4-14-600x600.jpg" class="lazy">
                        <h3>Samsung Galaxy J4</h3>
                        <div class="price"><strong>3.790.000₫</strong></div>
                        <div class="promo noimage">
                            <p> G&#243;i qu&#224; tặng Galaxy xem phim &amp; uống cafe cuối tuần và <b>1 K.mãi</b> khác</p>
                        </div>

                        <label class="new">Mới ra mắt</label>
                    </a>
                    <!--#endregion -->

                </li>
                <li data-id="92962">
                    <!--#region Ngành hàng chính -->
                    <a href="/dtdd/iphone-6-32gb-gold" >
                        <img width="180" height="180" data-original="https://cdn2.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-gold-hh-600x600.jpg" class="lazy">
                        <h3>iPhone 6 32GB</h3>
                        <div class="price"><strong>7.490.000₫</strong></div>
                        <div class="promo">
                            <img width="30" height="30" data-original="https://cdn3.tgdd.vn/Products/Images/2102/128988/phieu-mua-hang-500000d-1-100x100.jpg" class="lazy">
                            <p>Tặng Phiếu mua h&#224;ng 500.000đ và <b>1 K.mãi</b> khác</p>
                        </div>

                        <label class="installment">Trả góp 0%</label>
                    </a>
                    <!--#endregion -->

                </li>
                <li class="feature" data-id="145295">

                    <a href="/dtdd/oppo-a83">
                        <img width="600" height="275" data-original="https://cdn.tgdd.vn/Products/Images/42/145295/Feature/oppo-a83-4.jpg" class="lazy">
                        <h3>OPPO A83</h3>
                        <div class="price"><strong>4.990.000₫</strong></div>
                        <label class="discount">GIẢM 500.000₫</label>
                    </a>

                </li>
                <li data-id="156205">
                    <!--#region Ngành hàng chính -->
                    <a href="/dtdd/vivo-y85" >
                        <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/42/156205/vivo-y85-red-docquyen-600x600.jpg" class="lazy">
                        <h3>Vivo Y85</h3>
                        <div class="price"><strong>5.990.000₫</strong></div>
                        <div class="promo">
                            <img width="30" height="30" data-original="https://cdn.tgdd.vn/Products/Images/2102/147565/noi-inox-sunhouse-shg24220-km-100x100.jpg" class="lazy">
                            <p>Tặng Nồi inox 5 đ&#225;y Sunhouse</p>
                        </div>

                        <label class="installment">Trả góp 0%</label>
                    </a>
                    <!--#endregion -->

                </li>
                <li data-id="153854">
                    <!--#region Ngành hàng chính -->
                    <a href="/dtdd/nokia-7-plus" >
                        <img width="180" height="180" data-original="https://cdn4.tgdd.vn/Products/Images/42/153854/nokia-7-plus-2-600x600.jpg" class="lazy">
                        <h3>Nokia 7 plus</h3>
                        <div class="price"><strong>8.990.000₫</strong></div>
                        <div class="promo noimage">
                            <p> Cơ hội tr&#250;ng 10 xe Vespa LX IGET</p>
                        </div>

                        <label class="installment">Trả góp 0%</label>
                    </a>
                    <!--#endregion -->

                </li>
                <li data-id="155261">
                    <!--#region Ngành hàng chính -->
                    <a href="/dtdd/oppo-f7" >
                        <img width="180" height="180" data-original="https://cdn1.tgdd.vn/Products/Images/42/155261/oppo-f7-bac-600x600.jpg" class="lazy">
                        <h3>OPPO F7</h3>
                        <div class="price"><strong>7.990.000₫</strong></div>
                        <div class="promo">
                            <img width="30" height="30" data-original="https://cdn4.tgdd.vn/Products/Images/2102/118294/phieu-mua-hang-100000d-1-100x100.jpg" class="lazy">
                            <p>Tặng Phiếu mua h&#224;ng 100.000đ khi mua online và <b>2 K.mãi</b> khác</p>
                        </div>

                        <label class="installment">Trả góp 0%</label>
                    </a>
                    <!--#endregion -->

                </li>
            </ul>

            {{--@include('phone.includes.gird-products')--}}
        </div>
    </section>





<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/toastr.js') }}"></script>
@yield('scripts')
</body>
</html>