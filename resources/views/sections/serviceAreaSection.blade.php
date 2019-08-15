<section class="service-area-wrapper container-fluid" style="background-image: url('{{ asset('images/map_background.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-md-1 col-md-12 p-0 map-wrapper" style="overflow:hidden;">
                <iframe allowfullscreen src="https://www.google.com/maps/d/u/0/embed?mid=1i_dlLGhVgfWKeaZ0pnJxJ7O1EAoF8cJI&z=11" style="position:absolute; top:-78px; overflow:hidden; border:none;" width="100%" height="600px"></iframe>
            </div>
            <div class="order-first order-md-2 col-lg-4 col-md-12 service-area-right d-flex flex-column justify-content-center pl-4">
                <div data-aos="fade-left" class=location-icon-wrapper>
                    <span class="location-icon">@include('svgs/location_icon')</span>
                </div>
                <h1 data-aos="fade-left">SERVICE</h1>
                <h1 data-aos="fade-left">COVERAGE</h1>
                <h1 data-aos="fade-left">AREA</h1>
            </div>
        </div>
    </div>
</section>
