@extends('layouts.app')

@section('title', __('app.titles.menu_title'))
@section('description', __('app.contents.menu_content'))
@section('keywords', __('app.keywords.menu_keywords'))

@section('og_url', route('menu'))
@section('og_image', asset('images/logo/logo.png'))
@section('og_type', __('app.titles.menu_title'))

@section('t_title', __('app.titles.menu_title')) <!-- Twitter title should be a title, not URL -->
@section('t_description',  __('app.contents.menu_content'))
@section('t_url', route('menu'))
@section('t_image', asset('images/logo/logo.png') )

@section('content')


    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{__('app.navbar.menu')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">{{__('app.navbar.home')}}</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{__('app.navbar.menu')}}</li>
                </ol>
            </nav>
        </div>
    </div>
<!-- Menu Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{__('app.sections_titles.menu_title')}}</h5>
            <h1 class="mb-5">{{__('app.sections_titles.menu_sub_title')}}</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-flex  border-bottom mb-5 custom-scroll">
                @foreach($categories as $key=> $category)
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 p-3 pb-3  {{ $key == 0 ? 'active ' : '' }}wow fadeInUp" data-wow-delay="0.1s"
                        data-bs-toggle="pill" href="#tab-cat-{{$category->id}}">
                        <!-- <i class="fa fa-coffee fa-2x text-primary"></i> -->
                        <img  src="{{voyager::image($category->image)}}" alt="">
                        <div class="px-3 cat-name">
                            <!-- <small class="text-body">Popular</small> -->
                            <h5 class="mt-n1 mb-0 ">{{ $category['name_' . app()->getLocale()] }}</h5>
                        </div>
                    </a>
                </li>
                @endforeach

            </ul>
            <div class="tab-content">
                @foreach($categories as $key => $category)
                <div id="tab-cat-{{$category->id}}" class="tab-pane fade show p-0 {{ $key == 0 ? 'active' : '' }}">
                    <div class="row g-4">
                        @foreach($category->products as $product)
                        @php
                            $images = json_decode($product->images);
                        @endphp
                        <div class="col-lg-6 menu-item">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="{{Voyager::image($images[0])}}" alt=""
                                    style="width: 100px;">
                                <div class="w-100 item-info d-flex flex-column text-center px-4">
                                    <h5 class=" border-bottom pb-2">
                                        <span>{{ $product['name_' . app()->getLocale()] }}</span>
                                    </h5>
                                    <small class="text-primary">
                                        <strong>{{ number_format($product->price, 2) }}</strong> {{__('app.labels.aed')}} {{__('/')}} <strong>{{$product->unit_count}}</strong>{{__(' ')}} {{__('app.labels.'.$product->unit_text)}}</small>

                                    <!-- <small class="fst-italic">{{ $product['desc_' . app()->getLocale()] }}</small> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Menu End -->
@endsection