@extends('layouts.app')

@section('title', __('app.titles.products_title', ['category' => $category->{'name_' . app()->getLocale()}]))
@section('description', __('app.contents.products_content', ['category' => $category->{'name_' . app()->getLocale()}]))
@section('keywords', __('app.keywords.products_keywords', ['category' => $category->{'name_' . app()->getLocale()}]))

@section('og_url', route('category.show', $category->slug))
@section('og_image', Voyager::image($category->image))
@section('og_type', 'category')

@section('t_title', $category->name) <!-- Twitter title should be a title, not URL -->
@section('t_description',  __('app.contents.products_content', ['category' => $category->{'name_' . app()->getLocale()}]))
@section('t_url', route('category.show', $category->slug))
@section('t_image', Voyager::image($category->image))

@section('content')

<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{$category['name_' . app()->getLocale()]}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">{{__('app.navbar.home')}}</a></li>
                     <li class="breadcrumb-item text-primary active" aria-current="page">{{$category['name_' . app()->getLocale()]}}</li>

                </ol>
            </nav>
        </div>
</div>

<!-- Product Start -->
    <div class="container-xxl  my-6 py-6 pt-0" style="margin: 12rem 0;">
        <div class="container">
            
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// {{$category['name_' . app()->getLocale()]}} Products</p>
                <h1 class="display-6 mb-4">{{$category['desc_' . app()->getLocale()]}}</h1>
            </div>
            <div class="row g-4">
                @foreach($category->products as $key=> $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </div>
    <!-- Product End -->

@endsection