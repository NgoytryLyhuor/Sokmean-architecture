@php
    $data = App\Models\Team::Where('role','testimonial')->get();
@endphp

<div class="sec-4 section">
    <div class="text-center mb-5">
        <h2 class="heading mb-5 text-center">Testimonial</h2>
    </div>

    <div class="testimonial-slide-center-wrap" data-aos="fade-up" data-aos-delay="100">

        <div id="testimonial-nav">
            <span class="prev" data-controls="prev"><span class="icon-chevron-left"></span></span>
            <span class="next" data-controls="next"><span class="icon-chevron-right"></span></span>
        </div>

        <div class="testimonial-slide-center testimonial-center" id="testimonial-center">
            @if ($data->count() > 1)
                @foreach($data as $item)
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="testimonial-item-inner">
                                <div class="testimonial-author mb-5">
                                    <img style="height: 80px;width: 80px;object-fit: cover" src="{{ asset('backend/assets/images/testimonial/' . $item->image) }}" alt="Image" class="img-fluid">
                                    <strong class="d-block">{{ $item->name }}</strong>
                                    <span>{{ $item->position }}</span>
                                </div>
                                <blockquote>{{ $item->description }}</blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                @foreach($data as $item)
                    <div class="item" style="opacity: 1">
                        <div class="testimonial-item">
                            <div class="testimonial-item-inner" style="background-color: #000">
                                <div class="testimonial-author mb-5">
                                    <img style="height: 80px;width: 80px;object-fit: cover" src="{{ asset('backend/assets/images/testimonial/' . $item->image) }}" alt="Image" class="img-fluid">
                                    <strong class="d-block text-white">{{ $item->name }}</strong>
                                    <span>{{ $item->position }}</span>
                                </div>
                                <blockquote>{{ $item->description }}</blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</div>
