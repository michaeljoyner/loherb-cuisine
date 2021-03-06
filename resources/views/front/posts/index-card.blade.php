<div data-usher class="flex flex-col justify-between mb-8 w-9/10 md:w-64 max-w-full bg-pinky-grey mx-auto">
    <div>
        <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="block relative" style="padding-bottom: 75%">
            <img data-src="{{ $post['title_image_thumb'] }}"
                 alt="{{ $post['title'] }}" class="w-full h-full object-cover absolute inset-0 lazyload">
        </a>
        <div class="p-4">
            <p class="type-h2 text-purple">{{ $post['title'] }}</p>
            <p class="font-sans zh:font-transat font-bold text-sm text-purple-soft">{{ $post['publish_date_string'] }}</p>
            <p class="text-purple">{{ $post['intro'] }}</p>
        </div>
    </div>

    <a href="{{ localUrl('/journal/' . $post['slug']) }}" class="no-underline btn btn-purple mb-8 mt-4">{{ trans('homepage.journal.read_button') }}</a>
</div>
