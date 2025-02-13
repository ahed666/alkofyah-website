@extends('layouts.app')
@section('title', __('app.titles.contact_title'))
@section('description', __('app.contents.contact_content'))
@section('keywords', __('app.keywords.contact_keywords'))

@section('og_url', route('contact.show'))
@section('og_image',  asset('images/logo/logo.png') )
@section('og_type', __('app.titles.contact_title'))

@section('t_title', __('app.titles.contact_title')) <!-- Twitter title should be a title, not URL -->
@section('t_description',  __('app.contents.contact_content'))
@section('t_url', route('contact.show'))
@section('t_image',  asset('images/logo/logo.png') )

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">{{__('app.navbar.contact')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">{{__('app.navbar.home')}}</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">{{__('app.navbar.contact')}}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-6 contact-section">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// {{__('app.sections_titles.contact_title')}}</p>
            <h1 class="display-6 mb-4">{{__('app.sections_titles.contact_sub_title')}}</h1>
        </div>
        <div class="row g-4 ">
            <!-- Left Side: Contact Information -->
            <div class="col-lg-5 contact-info wow fadeInUp" data-wow-delay="0.1s">
                <div class=" p-4 rounded">
                    <h3 class="mb-4">{{ __('app.labels.our_branches') }}</h3>
                    @foreach($branches as $branch)
                    <div class="mb-3">
                        <h5 class="text-primary">{{$branch['name_'.app()->getLocale()]}}</h5>
                        <a href="tel:{{$branch->phone}}" class="phone_number"><i class="fas fa-map-marker-alt text-primary"></i>
                            {{$branch['location_'.app()->getLocale()]}}</a>
                        <a href="tel:{{$branch->phone}}" class="phone_number"><i class="fas fa-phone text-primary"></i> {{ $branch->phone }}</a>
                        <a class="btn btn-square btn-outline-light text-primary  border-primary rounded-circle me-1"
                                target="_blank" href="https://wa.me/{{ $branch->phone }}"><i
                                    class="fab fa-whatsapp"></i>{{ $branch->phone }}</a>
                    </div>
                    @endforeach

                    <hr>

                    <h4 class="mb-3">{{ __('app.labels.contact_info') }}</h4>
                    <p><i class="fas fa-envelope text-primary"></i> {{ $contact_info['email'] }}</p>

                    <div class="mt-3">
                        <h4 class="mb-3">{{ __('app.labels.follow_us') }}</h4>
                        <div class="d-flex justif-content-between ">
                            <a class="btn btn-square btn-outline-light text-primary  border-primary rounded-circle me-1"
                                href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-outline-light text-primary  border-primary rounded-circle me-1"
                                href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light text-primary  border-primary rounded-circle me-1"
                                target="_blank" href="https://wa.me/{{$contact_info['whatsapp']}}"><i
                                    class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                <div class=" p-4 rounded">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name" required>
                                    <label for="name">{{__('app.labels.name')}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                    <label for="email">{{__('app.labels.email')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                    <label for="subject">{{__('app.labels.subject')}}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here"
                                        id="message" style="height: 200px" required></textarea>
                                    <label for="message">{{__('app.labels.message')}}</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary rounded-pill py-3 px-5"
                                    type="submit">{{__('app.buttons.sendmessage')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Contact End -->
@endsection