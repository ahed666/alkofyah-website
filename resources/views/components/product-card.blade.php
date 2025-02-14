<div class="col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="{{ ($delay ?? '0.1').'s' }}">
                    <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                        <div class="text-center p-4">
                            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">
                                 <strong>{{ number_format($product->price, 2) }}</strong> {{__('app.labels.aed')}} {{__('/')}} <strong>{{$product->unit_count}}</strong>{{__(' ')}} {{__('app.labels.'.$product->unit_text)}}</div>
                            <h3 class="mb-3">{{$product['name_'.app()->getLocale()]}}</h3>
                            <span>{{$product['desc_'.app()->getLocale()]}}</span>
                        </div>
                        <div class="position-relative mt-auto product-img">
                        @php
                            $images = json_decode($product->images);
                        @endphp
                            <img class="img-fluid " src="{{Voyager::image($images[0])}}" alt="{{$product['alt_'.app()->getLocale()]}}">
                            @if($product->new)
                            <div class="position-absolute custom-bottom px-1">
                                <span class="bg-success text-white px-2 py-1 rounded fw-bold">{{__('app.labels.new')}}</span>
                            </div>
                            @endif
                            <div class="product-overlay">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{route('product.show',$product->slug)}}"><i class="fa fa-eye text-primary"></i></a>
                            </div>
                        </div>
                    </div>
</div>