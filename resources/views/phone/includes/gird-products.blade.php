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
                <a href="{{ url($type.'/'.$p->url_sp) }}">
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
                <a href="{{ url($type.'/'.$p->url_sp) }}" >
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
    {{--<li>
        <a href="/dtdd/iphone-x-256gb-silver" >
            <img width="180" height="180" src="https://cdn4.tgdd.vn/Products/Images/42/172404/iphone-x-256gb-silver-400x400.jpg">

            <h3>iPhone X 256GB Silver</h3>
            <div class="price"><strong>34.790.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 3 triệu thanh to&#225;n online bằng thẻ Mastercard và <b>3 K.mãi</b> khác</p>
            </div>
            <label class="discount">GIẢM 2.000.000₫</label>
        </a>

    </li>

    <li>
        <a href="/dtdd/iphone-x-64gb" >
            <img width="180" height="180" src="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-21-400x400.jpg">

            <h3>iPhone X 64GB Gray</h3>
            <div class="price"><strong>29.990.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 2 triệu thanh to&#225;n online bằng Mastercard và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 3.000.000₫</label>
        </a>

    </li>

    <li>
        <a href="/dtdd/iphone-x-64gb-silver" >
            <img width="180" height="180" src="https://cdn2.tgdd.vn/Products/Images/42/172602/iphone-x-64gb-silver-400x400.jpg">

            <h3>iPhone X 64GB Silver</h3>
            <div class="price"><strong>29.990.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 2 triệu thanh to&#225;n online bằng Mastercard và <b>3 K.mãi</b> khác</p>
            </div>
            <label class="discount">GIẢM 2.000.000₫</label>
        </a>
    </li>

    <li>
        <a href="/dtdd/iphone-8-plus-do-256gb" >
            <img width="180" height="180" src="https://cdn1.tgdd.vn/Products/Images/42/164236/iphone-8-plus-do-256gb-400x400.jpg">

            <h3>iPhone 8 Plus Red 256GB (Đỏ)</h3>
            <div class="price"><strong>28.790.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu thanh to&#225;n online bằng Mastercard và <b>3 K.mãi</b> khác</p>
            </div>
            <label class="discount">GIẢM 1.000.000₫</label>
        </a>
    </li>

    <li>
        <a href="/dtdd/iphone-8-256gb" >
            <img width="180" height="180" src="https://cdn2.tgdd.vn/Products/Images/42/114112/iphone-8-256gb-hh-400x400.jpg">

            <h3>iPhone 8 256GB</h3>
            <div class="price"><strong>25.790.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu thanh to&#225;n online bằng Mastercard và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 1.000.000₫</label>
        </a>
    </li>

    <li class="feature">

        <a href="/dtdd/samsung-galaxy-s9-plus-128gb-vang-dong">
            <img width="600" height="275" src="https://cdn4.tgdd.vn/Products/Images/42/168999/Feature/ft-samsung-galaxy-s9-plus-128gb-vang-dong-2.jpg">

            <h3>Samsung Galaxy S9+ 128GB Ho&#224;ng Kim</h3>
            <div class="price"><strong>24.490.000₫</strong></div>

            <label class="discount">GIẢM 2.000.000₫</label>
        </a>

    </li>
    <li>


        <a href="/dtdd/samsung-galaxy-s9-plus-128gb" >
            <img width="180" height="180" src="https://cdn.tgdd.vn/Products/Images/42/154695/samsung-galaxy-s9-plus-128gb-400x400.jpg">

            <h3>Samsung Galaxy S9+ 128GB</h3>
            <div class="price"><strong>24.490.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu thanh to&#225;n online bằng Mastercard và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 2.000.000₫</label>
        </a>

    </li>
    <li>


        <a href="/dtdd/iphone-8-plus" >
            <img width="180" height="180" src="https://cdn.tgdd.vn/Products/Images/42/114110/iphone-8-plus-hh-400x400.jpg">

            <h3>iPhone 8 Plus 64GB</h3>
            <div class="price"><strong>23.990.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu cho Apple Watch khi mua k&#232;m iPhone/iPad và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 1.000.000₫</label>
        </a>

    </li>
    <li>


        <a href="/dtdd/iphone-8-plus-do" >
            <img width="180" height="180" src="https://cdn3.tgdd.vn/Products/Images/42/158738/iphone-8-plus-red-400x400.jpg">

            <h3>iPhone 8 Plus Red 64GB (Đỏ)</h3>
            <div class="price"><strong>23.990.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu cho Apple Watch khi mua k&#232;m iPhone/iPad và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 1.000.000₫</label>
        </a>

    </li>
    <li class="feature">

        <a href="/dtdd/samsung-galaxy-s9-plus">
            <img width="600" height="275" src="https://cdn4.tgdd.vn/Products/Images/42/147939/Feature/samsung-galaxy-s9-plus-16.jpg">

            <h3>Samsung Galaxy S9+ 64GB</h3>
            <div class="price"><strong>23.490.000₫</strong></div>

            <label class="discount">GIẢM 2.000.000₫</label>
        </a>

    </li>
    <li>


        <a href="/dtdd/samsung-galaxy-s9-plus-64gb-tim" >
            <img width="180" height="180" src="https://cdn3.tgdd.vn/Products/Images/42/177048/samsung-galaxy-s9-plus-64gb-tim-400x400.jpg">

            <h3>Samsung Galaxy S9+ 64GB T&#237;m</h3>
            <div class="price"><strong>23.490.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu thanh to&#225;n online bằng Mastercard và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 2.000.000₫</label>
        </a>

    </li>
    <li>


        <a href="/dtdd/iphone-7-plus-128gb" >
            <img width="180" height="180" data-original="https://cdn4.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-hh-400x400.jpg" class="lazy">

            <h3>iPhone 7 Plus 128GB</h3>
            <div class="price"><strong>22.990.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu cho Apple Watch khi mua k&#232;m iPhone/iPad và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 1.000.000₫</label>
        </a>

    </li>
    <li class="feature">

        <a href="/dtdd/samsung-galaxy-note8">
            <img width="600" height="275" data-original="https://cdn1.tgdd.vn/Products/Images/42/106211/Feature/samsung-galaxy-note8-20.jpg" class="lazy">

            <h3>Samsung Galaxy Note 8</h3>
            <div class="price"><strong>22.490.000₫</strong></div>

            <label class="discount">GIẢM 2.000.000₫</label>
        </a>

    </li>
    <li>


        <a href="/dtdd/iphone-8-64gb" >
            <img width="180" height="180" data-original="https://cdn3.tgdd.vn/Products/Images/42/114113/iphone-8-64gb-hh-400x400.jpg" class="lazy">

            <h3>iPhone 8 64GB</h3>
            <div class="price"><strong>20.990.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu cho Apple Watch khi mua k&#232;m iPhone/iPad và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 1.000.000₫</label>
        </a>

    </li>
    <li>


        <a href="/dtdd/iphone-8-do" >
            <img width="180" height="180" data-original="https://cdn.tgdd.vn/Products/Images/42/158730/iphone-8-red-do-2-400x400.jpg" class="lazy">

            <h3>iPhone 8 Red 64GB (Đỏ)</h3>
            <div class="price"><strong>20.990.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu cho Apple Watch khi mua k&#232;m iPhone/iPad và <b>3 K.mãi</b> khác</p>
            </div>

            <label class="discount">GIẢM 1.000.000₫</label>
        </a>

    </li>
    <li>


        <a href="/dtdd/iphone-7-plus" >
            <img width="180" height="180" data-original="https://cdn4.tgdd.vn/Products/Images/42/78124/iphone-7-plus-32gb-hh-400x400.jpg" class="lazy">

            <h3>iPhone 7 Plus 32GB</h3>
            <div class="price"><strong>19.990.000₫</strong></div>

            <div class="promo noimage">
                <p> Giảm 1 triệu cho Apple Watch khi mua k&#232;m iPhone/iPad và <b>2 K.mãi</b> khác</p>
            </div>

            <label class="installment">Trả góp 0%</label>
        </a>

    </li>--}}
</ul>