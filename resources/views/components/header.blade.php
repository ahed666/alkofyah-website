<!-- Topbar Start -->
<div class="container-fluid top-bar  bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <ol class="breadcrumb mb-0">
                <li class="">
                <a class="btn btn-square btn-outline-light rounded-circle mx-1" target="_blank" href="mailto:{{ $contact_info['email'] }}?subject=Inquiry&body=I have a question about your services."><i class="fa fa-envelope"></i></a>
                </li>
                <li class="">
                <a class="btn btn-square btn-outline-light rounded-circle mx-1" target="_blank" href="https://wa.me/{{$contact_info['whatsapp']}}"><i class="fab fa-whatsapp"></i></a>

                </li>
            </ol>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>{{__('app.labels.followus')}}:</small>
            <div class="h-100 d-inline-flex align-items-center">
       
                <a class="btn-lg-square text-primary " target="_blank"  href="{{$contact_info['facebook']}}">
                    <i class="fab fa-facebook-f"></i></a>
                <a class="btn-lg-square text-primary px-0" target="_blank"  href="{{$contact_info['instagram']}}">
                    <i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{route('home')}}" class="navbar-brand ms-4 ms-lg-0">
        <!-- <h1 class="text-primary m-0">Baker</h1> -->
        <img class="navbar-brand-img" src="{{asset('img/logo/logo.png')}}" style="object-fit: contain; width: 120px;"
            alt="">
    </a>
    <button type="button" class="navbar-toggler mx-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="navbar-toggle-svg ">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
            </svg>

        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto p-4 p-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">{{__('app.navbar.home')}}</a>
            <a href="{{route('menu')}}" class="nav-item nav-link {{ request()->routeIs('menu') ? 'active' : '' }}">{{__('app.navbar.menu')}}</a>
            <div class="nav-item dropdown">
                <a href="#"  class="nav-link dropdown-toggle {{ request()->routeIs('category.show') ? 'active' : '' }}"
                    data-bs-toggle="dropdown">{{__('app.navbar.categories')}}</a>
                <div class="dropdown-menu m-0">
                    @foreach($categories as $category)
                    <a href="{{route('category.show',$category->slug)}}" class="dropdown-item">

                        {{$category['name_' . app()->getLocale()]}}
                    </a>
                    @endforeach
                </div>
            </div>

            <a href="{{route('about')}}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">{{__('app.navbar.about')}}</a>
            <a href="{{route('contact.show')}}" class="nav-item nav-link {{ request()->routeIs('contact.show') ? 'active' : '' }}">{{__('app.navbar.contact')}}</a>

            @if(app()->getLocale()=='en')
            <a href="{{route('locale.change','ar')}}" class="nav-item nav-link">{{__('العربية')}}</a>
            @else
            <a href="{{route('locale.change','en')}}" class="nav-item nav-link">{{__('English')}}</a>
            @endif

        </div>
        <div class=" d-none text-white navbar-contact-number d-lg-flex">
            <div class="flex-shrink-0 btn-lg-square   rounded-circle" style=" border:1px solid;border-color: inherit;">
                <i class="fa fa-phone  fw-bold"></i>
            </div>
            <div class="px-3">

                @foreach($branches as $branch)
                <p class=" fs-5 mb-0">
                    <a href="tel:{{$branch->phone}}" style="color: inherit;"
                        class="fw-bold  text-decoration-none">{{$branch->phone}}</a>
                </p>
                @endforeach
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->