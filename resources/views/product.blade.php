@extends('layouts.app')

@php
    $images = json_decode($product->images); 
    $image=$images[0];
@endphp

@section('title', __('app.titles.product_title', ['product' => $product->{'name_' . app()->getLocale()}, 'category' => $product->category->{'name_' . app()->getLocale()}]))
@section('description', __('app.contents.product_content', ['product' => $product->{'name_' . app()->getLocale()}, 'category' => $product->category->{'name_' . app()->getLocale()}]))
@section('keywords', __('app.keywords.product_keywords', ['product' => $product->{'name_' . app()->getLocale()}, 'category' => $product->category->{'name_' . app()->getLocale()}]))

@section('og_url', route('product.show', $product->slug))
@section('og_image', Voyager::image($image))
@section('og_type', 'product')

@section('t_title', $product->name) <!-- Twitter title should be a title, not URL -->
@section('t_description', __('app.contents.product_content', ['product' => $product->{'name_' . app()->getLocale()}, 'category' => $product->category->{'name_' . app()->getLocale()}]))
@section('t_url', route('product.show', $product->slug))
@section('t_image', Voyager::image($image))

@section('content')

<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{$product['name_' . app()->getLocale()]}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">{{__('app.navbar.home')}}</a></li>
                    <li class="breadcrumb-item   "> <a class="text-white" href="{{route('category.show',$product->category->slug)}}" >{{$product->category['name_' . app()->getLocale()]}}</a></li>
                     <li class="breadcrumb-item text-primary active" aria-current="page">{{$product['name_' . app()->getLocale()]}}</li>

                </ol>
            </nav>
        </div>
</div>
<div class="container mt-4">
    <div class="row">
      
        <div class="col-md-6">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                   
                    @foreach ($images as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img src="{{ Voyager::image($image) }}" class="d-block w-100 rounded" alt="{{$product['name_'.app()->getLocale()]}}-{{ $product['name_' . app()->getLocale()] }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>

       
        <div class="col-md-6">
            <h2 class="fw-bold">{{ $product['name_' . app()->getLocale()] }}</h2>

            
            <div class="mb-3">
                @if ($product->new)
                    <span class="badge bg-success mx-2">New</span>
                @endif
                @if ($product->featured)
                    <span class="badge bg-warning text-dark">Featured</span>
                @endif
            </div>

            <p class="text-muted">{{ $product['desc_' . app()->getLocale()] }}</p>

            <h4 class="text-primary">
            {{ number_format($product->price, 2) }} {{__('app.labels.aed')}} {{__('/')}} 
            {{$product->unit_count}}{{__(' ')}} {{__('app.labels.'.$product->unit_text)}}
            
        </h4>

           
        </div>
    </div>

   
    <h3 class="mt-5">Related Products</h3>
    <div class="row">
        @foreach ($relatedProducts as $prodRelated)
            <x-product-card :product="$prodRelated"/>
        @endforeach
    </div>
</div>

@endsection