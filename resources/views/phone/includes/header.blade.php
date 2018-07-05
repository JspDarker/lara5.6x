<header class="fixed-top head-border">
    <div class="wrap-main">
        <a class="logo" title="Về trang chủ Thegioididong.com" href="{{url('tgdd')}}">
            <i class="icontgdd-logo"></i>
        </a>
        <form id="search-site" action="/tim-kiem" method="get" onsubmit="return submitSearchForm();" autocomplete="off">
            <input class="topinput" id="search-keyword" name="key" type="text" placeholder="Bạn tìm gì..." autocomplete="off" onkeyup="SuggestSearch(event,this, 0);" maxlength="50" />
            <button class="btntop" type="submit"><i class="icontgdd-topsearch"></i></button>
        </form>
        <nav>
            @foreach($categories as $ca)
                <a href="{{ route('phone.girds',$ca->url_type) }}" class="mobile" title="Điện thoại di động, smartphone">
                    <i class="{{ $ca->icon }}"></i>{{ $ca->name }}
                </a>
            @endforeach

            <a href="/phu-kien" class="phukien" title="Phụ kiện điện thoại di động, phụ kiện tablet, phụ kiện lapto">
                <i class="icontgdd-phukien"></i>Phụ kiện
            </a>
            <a href="/may-doi-tra" class="maydoitra" title="Máy cũ giá rẻ, máy đổi trả thegioididong">
                <i class="icontgdd-maydoitra"></i><span>Máy</span>Cũ giá rẻ
            </a>
            <a href="/khuyen-mai" class="promo" title="Các chương trình khuyến mãi tại Thegioididong">
                <i class="icontgdd-promo"></i>Khuyến mãi
            </a>
            <a href="/tin-tuc" class="news" title="Tin công nghệ">
                <i class="icontgdd-news"></i><span>Tin</span>Công Nghệ
            </a>
            <a href="/hoi-dap" class="ask" title="Hỏi đáp">
                <i class="icontgdd-ask"></i>Hỏi đáp
            </a>
            <a href="/sim-so-dep" class="cardsim">Sim số<br />
                Thẻ cào</a>
            <a href="/tien-ich/thanh-toan-tra-gop?" class="utility">Đóng tiền điện,<br />
                nước, trả góp</a>
        </nav>
    </div>
    <div class="clr"></div>
</header>
