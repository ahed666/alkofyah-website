<div class="container-xxl  my-6 py-6 pt-0">
    <div class="container">    
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// {{__('app.sections_titles.branches_title')}}</p>
                <h1 class="display-6 mb-4">{{__('app.sections_titles.branches_sub_title')}}</h1>
    </div>
    
    <div class="row">
        <!-- Left Half: Branch Cards -->
        <div class="col-md-6">
            <div class="row">
                @foreach($branches as $branch)
                <div class="col-md-12 mb-3">
                    <div class="card shadow-sm p-2">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ Voyager::image($branch->image) }}" class="img-fluid rounded" alt="{{ $branch->name }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $branch['name_'.app()->getLocale()] }}</h5>
                                    <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> {{ $branch['location_'.app()->getLocale()] }}</p>
                                    <p class="card-text"><i class="fa fa-phone text-primary"></i> {{ $branch->phone }}</p>
                                    <div class="d-flex align-items-center ">
                                    <button class="btn btn-sm btn-outline-primary mx-1" onclick="focusOnBranch({{ $branch->latitude }}, {{ $branch->longitude }})">
                                    {{__('app.buttons.viewonmap')}}
                                    </button>
                                    <a href="https://www.google.com/maps/dir/?api=1&destination={{ $branch->latitude }},{{ $branch->longitude }}" target="_blank"
                                     class="btn btn-sm btn-outline-primary mx-1">
                                        {{__('app.buttons.getdirections')}}
                                    </a>
                                    <a class="btn btn-square btn-outline-primary rounded-circle text-primary  mx-1"
                                    onmouseover="this.classList.add('text-white')" onmouseout="this.classList.remove('text-white')" target="_blank" 
                                    href="https://wa.me/{{$branch->phone}}"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Right Half: Google Map -->
        <div class="col-md-6">
            <div id="map" style="height: 400px; width: 100%;"></div>
        </div>
    </div>
</div>
</div>
  <script>
    
  </script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script>
                var branches = @json($branches); // Get branches from database

   
    var map = L.map('map').setView([25.276987, 55.296249], 10); // Default: Dubai

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    
    branches.forEach(branch => {
        L.marker([branch.latitude, branch.longitude])
            .addTo(map)
            .bindPopup(`<b>${branch.name_en}</b>`)
            .openPopup();
    });
    function focusOnBranch(lat, lng) {
        map.setView([parseFloat(lat), parseFloat(lng)], 14);  // Set the map center and zoom level
    }
</script>