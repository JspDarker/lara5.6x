@extends('phone.layouts.master')

@section('title', 'App | Single Product')
@section('styles')

@stop

@section('phone-index')
<div id="main-products">

    <div class="navigat">
        <h2>Product Best Special</h2>
        <div class="viewallcat">
            {{--@foreach($categories as $category)
                <a href="{{ route('phone.girds',$category->url_type) }}">{{ $category->name }}</a>
            @endforeach--}}
            <a href="https://www.thegioididong.com/dtdd?p=tu-3-5-trieu">More</a>
            <a href="https://www.thegioididong.com/dtdd?s=tra-gop-0-phan-tram">Promotion price</a>
        </div>
    </div>

    <!-- home products -->
    <ul class="homeproduct ">
        <li class="feature" data-id="{{$single->id}}">
            <a href="#">
                <img width="600" height="275" src="{{ asset('images/tgdd/'.$single->image) }}">
                <h3>{{ $single->name }}</h3>
                <div class="price"><strong>{{ number_format($single->price) }}₫</strong></div>
                @if($single->promo_price == null)
                    <label class="installment">Trả góp 0%</label>
                @endif
                {{--<label class="installment">Trả góp 0%</label>--}}
            </a>
        </li>
    </ul>
</div>
@endsection

