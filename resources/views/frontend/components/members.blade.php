@php
    $data    = App\Models\Team::all();
@endphp
<div class="sec-4 section bg-light">

    <div class="text-center mb-5">
        <h2 class="heading mb-5 text-center">Testimonial</h2>
    </div>
    <div class="testimonial-slide-center-wrap" data-aos="fade-up" data-aos-delay="100">

        <div id="testimonial-nav">
            <span class="prev" data-controls="prev"><span class="icon-chevron-left"></span></span>

            <span class="next" data-controls="next"><span class="icon-chevron-right"></span></span>
        </div>

        <div class="testimonial-slide-center testimonial-center" id="testimonial-center">

            @foreach($data as $item)
                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img style="height: 80px;width: 80px;object-fit: cover" src="{{ asset('backend/assets/images/team/' . $item->image) }}" alt="Image" class="img-fluid">
                                <strong class="d-block">{{ $item->name }}</strong>
                                <span>{{ $item->position }}</span>
                            </div>
                            <blockquote>{{ $item->description }}</blockquote>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
