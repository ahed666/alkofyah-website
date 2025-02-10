<div class="container mt-4">
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// {{__('app.sections_titles.categories_title')}}</p>
                <h1 class="display-6 mb-4">{{__('app.sections_titles.categories_sub_title')}}</h1>
            </div>
    <div class="owl-carousel category-slider">
        @foreach($categories as $category)
            <div class="owl-carousel-item category-item text-center">
                <a class="d-grid algin-items-center justify-content-center" href="{{ route('category.show', $category->slug) }}">
                    <img src="{{ Voyager::image($category->image) }}" 
                        class="rounded-circle img-fluid" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <p class="mt-2">{{ $category['name_' . app()->getLocale()] }}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>


