<div class="navigat">
    <h2><span class="text-danger">{{ $categories_name }}</span> Best Product</h2>
    <div class="viewallcat">
        @foreach($cate as $c)
            <a href="{{ url('tgdd/'.$c->url_type) }}">{{ $c->name }}</a>
        @endforeach
        <a href="https://www.thegioididong.com/dtdd?p=tu-3-5-trieu">More</a>
        <a href="https://www.thegioididong.com/dtdd?s=tra-gop-0-phan-tram">Promotion price</a>
        <a href="/dtdd" class="mobile">Xem tất cả điện thoại</a>
    </div>
</div>
<ul class="homeproduct">

    @foreach($products as $p)

        @if($p->special != null)
            <li class="feature" data-id="{{$p->id}}">
                <a href="{{ route('phone.single',[$type, $p->url_sp, $p->id]) }}">
                    <img width="600" height="275" src="{{ asset('images/tgdd/'.$p->image) }}">
                    <h3>{{ $p->name }}</h3>
                    <div class="price">
                        @if($p->promo_price > $p->price)
                            <strong>{{number_format($p->price)}}₫</strong>
                            <span>{{number_format($p->promo_price)}}₫</span>
                            <label class="discount">GIẢM {{number_format($p->promo_price - $p->price)}}₫</label>

                        @else
                            <strong>{{number_format($p->price)}}₫</strong>
                        @endif
                    </div>

                </a>
            </li>
        @else
            <li>
                {{--<a href="{{ url($type.'/'.$p->url_sp) }}" >--}}
                <a href="{{ route('phone.single',[$type, $p->url_sp, $p->id]) }}" >
                    <img width="180" height="180" src="{{ asset('images/tgdd/'.$p->image) }}">

                    <h3>{{ $p->name }}</h3>
                    <div class="price">
                        @if($p->promo_price > $p->price)
                            <strong>{{number_format($p->price)}}₫</strong>
                            <span>{{number_format($p->promo_price)}}₫</span>
                            <label class="discount">GIẢM {{number_format($p->promo_price - $p->price)}}₫</label>

                        @else
                            <strong>{{number_format($p->price)}}₫</strong>
                        @endif
                    </div>

                    {{--<div class="promo noimage">
                        <p> Giảm 3 triệu thanh to&#225;n online bằng thẻ Mastercard và <b>3 K.mãi</b> khác</p>
                    </div>--}}

                </a>
            </li>
        @endif

    @endforeach

</ul>