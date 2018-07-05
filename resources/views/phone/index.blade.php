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
                        <a href="{{ url('tgdd/'.$a->category->url_type.'/'.$a->url_sp.'/'.$a->id) }}">
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
                        {{--<a href="{{ url('tgdd/'.$a->category->url_type.'/'.$a->url_sp.'/'.$a->id) }}" >--}}
                        <a href="{{ route('phone.single',[$a->category->url_type,$a->url_sp,$a->id]) }}" >
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
        </ul>
    </div>
@endsection
