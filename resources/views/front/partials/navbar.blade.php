<div class="fixed top-0 w-full flex justify-between items-center h-12 px-4 main-nav bg-purple hover:bg-purple font-medium z-50">
    <div>
        <a href="{{ localUrl("/") }}" tabindex="1" class="flex items-center h-12 ml-4">
            @include('svgs.logos.simple')
        </a>
    </div>
    <nav class="flex justify-end items-stretch type-a1 h-12 nav-list bg-purple lg:bg-transparent">

        <div class="flex items-center my-2 lg:my-0 nav-link-box">
            <a tabindex="2" class="flex items-center nav-link whitespace-nowrap text-white" href="{{ localUrl('/about') }}">{{ trans('navbar.about') }}</a>
        </div>
        <div class="flex items-center my-2 lg:my-0 nav-link-box">
            <a class="nav-link whitespace-nowrap text-white" href="{{ localUrl('/menu') }}">
                {{ trans('navbar.menu') }}
            </a>
        </div>
        <div class="flex items-center my-2 lg:my-0 nav-link-box">
            <a class="nav-link whitespace-nowrap text-gold" href="{{ localUrl('/book') }}">
                {{ trans('navbar.bookings') }}
            </a>
        </div>
        <div class="flex items-center my-2 lg:my-0 nav-link-box">
            <a class="flex items-center nav-link whitespace-nowrap text-white" tabindex="4" href="{{ localUrl('/events') }}">{{ trans('navbar.events') }}</a>
        </div>
        <div class="flex items-center my-2 lg:my-0 nav-link-box">
            <a class="flex items-center nav-link whitespace-nowrap text-white" tabindex="5" href="{{ localUrl('/journal') }}">{{ trans('navbar.blog') }}</a>
        </div>
        <div class="flex items-center my-2 lg:my-0 nav-link-box">
            <a class="flex items-center nav-link whitespace-nowrap text-white" tabindex="5" href="{{ localUrl('/contact') }}">{{ trans('navbar.contact') }}</a>
        </div>
        <div class="flex items-center my-2 lg:my-0 nav-link-box">
            <a class="flex items-center nav-link whitespace-nowrap text-white" tabindex="6" href="{{ transUrl(Request::path()) }}">{{ trans('navbar.lang') }}</a>
        </div>
    </nav>
    <div class="lg:hidden" id="nav-trigger">
        <span class="text-gold flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="fill-current"><path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
        </span>
    </div>
</div>
