<!-- Footer Start -->
<div class="footer-section container-fluid  text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s"
style="background: url('{{ asset('img/footer_bg.jpg') }}') no-repeat center center/cover;"
>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-primary mb-4">{{__('app.labels.bakery_address')}}</h4>
                    <div class="mb-4 text-light">
                    @foreach($branches as $branch)
                    <div class="mb-2">
                    <h6 class="text-light mb-1">{{$branch['name_'.app()->getLocale()]}}</h6>
                    <p class="mb-1"><i class="fa fa-map-marker-alt mx-3"></i>{{$branch['location_'.app()->getLocale()]}}</p>
                    <a href="tel:{{$branch->phone}}" class="mb-1"><i class="fa fa-phone-alt mx-3"></i>{{$branch->phone}}</a>
                    </div>
                    @endforeach
                    </div>
                    
                    <a href="mailto:{{ $contact_info['email'] }}?subject=Inquiry&body=I have a question about your services." class="mb-2 mt-2 text-white"><i class="fa fa-envelope mx-3"></i>{{$contact_info['email']}}</a>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle mx-1" target="_blank" href="{{$contact_info['instagram']}}"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle mx-1" target="_blank" href="{{$contact_info['facebook']}}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle mx-1" target="_blank" href="https://wa.me/{{$contact_info['whatsapp']}}"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-primary mb-4">{{__('app.labels.quick_links')}}</h4>
                    <a class="btn btn-link text-light" href="{{route('menu')}}">{{__('app.navbar.menu')}}</a>
                    <a class="btn btn-link text-light" href="{{route('contact.show')}}">{{__('app.navbar.contact')}}</a>
                    <a class="btn btn-link text-light" href="{{route('about')}}">{{__('app.navbar.about')}}</a>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-primary mb-4">{{__('app.labels.photo_gallary')}}</h4>
                    <div class="row g-2">
                        @foreach($gallary as $gItem)
                        @php
                        $images=json_decode($gItem->images);
                        @endphp
                        <div class="col-4">
                            <img class="img-fluid bg-primary rounded p-1"
                             src="{{Voyager::image($images[0])}}" 
                             alt="{{$gItem['alt_'.app()->getLocale()]}}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright font-bold text-white py-4 wow fadeIn border-top-dark" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                &copy; <a class="fw-bold text-white mx-1" href="{{ route('home') }}">{{ __('app.titles.app_title') }}</a>, {{ __('app.labels.allrightreserved') }}.
            </div>

                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    {{__('app.labels.desginedby')}}: <a class="fw-bold text-white mx-1" target="_blank" href="https://github.com/ahed666"><span>Ahed Naser Eddin</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->