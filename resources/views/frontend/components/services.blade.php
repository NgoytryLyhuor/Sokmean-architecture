<div class="section sec-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-ruler"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">{{ $interiorDesign->main_title }}</h3>
                        <p class="text-black-50">{{ $interiorDesign->banner_description }}</p>
                        <p>
                            <a href="{{ route('service_details', Str::slug($interiorDesign->main_title)) }}" class="more-2">More Details<span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-plan"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">{{ $landscapeDesign->main_title }}</h3>
                        <p class="text-black-50">{{ $landscapeDesign->banner_description }}</p>
                        <p>
                            <a href="{{ route('service_details', Str::slug($landscapeDesign->main_title)) }}" class="more-2">More Details<span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-color-palette"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">{{ $architectureDesign->main_title }}</h3>
                        <p class="text-black-50">{{ $architectureDesign->banner_description }}</p>
                        <p>
                            <a href="{{ route('service_details', Str::slug($architectureDesign->main_title)) }}" class="more-2">More Details<span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex custom-card">
                    <div class="img">
                        <i class="flaticon-wall"></i>
                    </div>
                    <div class="text">
                        <h3 class="h6 fw-bold text-black">{{ $floorPlan->main_title }}</h3>
                        <p class="text-black-50">{{ $floorPlan->banner_description }}</p>
                        <p>
                            <a href="{{ route('service_details', Str::slug($floorPlan->main_title)) }}" class="more-2">More Details<span class="icon-arrow_forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
