<div class="reg-section-space">
    @include('front.partials.heading-purple', ['text' => trans('homepage.instagram.heading')])
    <div class="mt-12">
        @foreach($instagrams->take(8)->chunk(4) as $row)
            <div class="max-w-xl mx-auto flex-wrap md:flex-no-wrap justify-center w-full flex">
            @foreach($row as $instagram)
                    <div class="instagram-image-box">
                        <img src="{{ $instagram['standard'] }}"
                             alt="">
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="text-center mt-8">
        <a class="text-link tracking-wide mt-8 text-purple hover:text-purple-soft" href="https://www.instagram.com/loherb0301">{{ trans('homepage.instagram.link_text') }} &rarr;</a>
    </div>
</div>