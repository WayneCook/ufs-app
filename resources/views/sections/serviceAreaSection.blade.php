<section class="service-area-wrapper container-fluid" style="background-image: url('{{ asset('images/map_background.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-md-1 col-md-12 p-4 map-wrapper">
                <iframe allowfullscreen src="https://www.google.com/maps/d/embed?mid=1IPC5HJbX8j1jLmnX6MWaEUs9e6WFbc3X" style="border:none;" width="100%" height="380"></iframe>
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
