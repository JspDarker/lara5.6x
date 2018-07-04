@extends('phone.layouts.master')

@section('title', 'App | Phone Simple')

@section('phone-index')
    <div id="main-products">

        <div class="navigat">
            <h2>Product Best Special</h2>
            <div class="viewallcat">
                @foreach($categories as $category)
                    <a href="{{ route('phone.girds',$category->url_type) }}">{{ $category->name }}</a>
                @endforeach
                <a href="https://www.thegioididong.com/dtdd?p=tu-3-5-trieu">More</a>
                <a href="https://www.thegioididong.com/dtdd?s=tra-gop-0-phan-tram">Promotion price</a>
            </div>
        </div>

        <!-- home products -->
        <ul class="homeproduct ">

            @foreach($sp as $a)
                @if($a->special != null)
                    <li class="feature" data-id="{{$a->id}}">
                        <a href="/dtdd/samsung-galaxy-j6">
                            <img width="600" height="275" src="{{ asset('images/tgdd/'.$a->image) }}">
                            <h3>{{ $a->name }}</h3>
                            <div class="price"><strong>{{ number_format($a->price) }}₫</strong></div>
                            @if($a->promo_price == null)
                                <label class="installment">Trả góp 0%</label>
                            @endif
                            {{--<label class="installment">Trả góp 0%</label>--}}
                        </a>
                    </li>
                @else
                    <li data-id="{{$a->id}}">
                        <!--#region Ngành hàng chính -->
                        <a href="/dtdd/samsung-galaxy-a6-2018" >
                            <img width="180px" height="180px" src="{{ asset('images/tgdd/'.$a->image) }}" >
                            <h3>{{ $a->name }}</h3>
                            <div class="price">
                                @if($a->promo_price > $a->price)
                                    <strong>{{ number_format($a->price) }}₫</strong><span>{{ number_format($a->promo_price) }}₫</span>
                                @else
                                    <strong>{{ number_format($a->price) }}₫</strong>
                                    <label class="installment">Trả góp 0%</label>
                                @endif

                            </div>

                            {{--<div class="promo">
                                <img width="30" height="30" data-original="https://cdn2.tgdd.vn/Products/Images/2102/121752/phieu-mua-hang-400000d-1-100x100.jpg" class="lazy">
                                <p>Tặng Phiếu mua h&#224;ng 400.000đ và <b>3 K.mãi</b> khác</p>
                            </div>--}}

                            {{--@if($a->promo_price == null)
                                <label class="installment">Trả góp 0%</label>
                            @endif--}}
                            {{--<label class="installment">Trả góp 0%</label>--}}
                        </a>
                        <!--#endregion -->

                    </li>
                @endif



            @endforeach

            {{--
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

            </li>--}}




            {{--<li data-id="153963">
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

            </li>--}}

        </ul>

        {{--@include('phone.includes.gird-products')--}}
    </div>
@endsection
