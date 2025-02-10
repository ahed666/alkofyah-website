<!-- Product Start -->
<div class="container-xxl  my-6 py-6 pt-0">
        <div class="container">
           
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// {{__('app.sections_titles.newest_products_title')}}</p>
                <h1 class="display-6 mb-4">{{__('app.sections_titles.newest_products_sub_title')}}</h1>
            </div>
            <div class="row g-4">
                @foreach($products as $idx => $product)
                @php
                $delay=($idx*$idx)*0.1+0.1;
                @endphp
                <x-product-card :product="$product" :delay="$delay" />
                @endforeach
            </div>
        </div>
</div>
    <!-- Product End -->