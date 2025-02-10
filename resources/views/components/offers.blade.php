<div class="container-xxl  my-6 py-6 pt-0">
    <div class="container">    
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// 🔥 {{__('app.sections_titles.offers_title')}} 🔥</p>
                <h1 class="display-6 mb-4"> {{__('app.sections_titles.offers_sub_title')}}</h1>
    </div>
   
    <div class="row">
        @foreach($offers as $offer)
        <div class="col-md-4">
            <div class="card shadow-sm">
                @if($offer->image)
                    <img src="{{ Voyager::image($offer->image) }}" class="card-img-top" alt="{{ $offer->title_en }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $offer['title_'.app()->getLocale()] }}</h5>
                    <p class="card-text">{{ $offer['desc_'.app()->getLocale()] }}</p>
                    <span class="badge bg-danger">-{{ $offer->discount }}% Off</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
