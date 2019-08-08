<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Loherb Villa')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="alternate" hreflang="{{ app()->getLocale() === 'en' ? 'zh' : 'en' }}" href="{{ url(transUrl(Request::path())) }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#5d2b46">

    <!-- Place favicon.ico in the root directory -->
    @if(app()->getLocale() === 'en')
    <link rel="stylesheet" href="https://use.typekit.net/mza6wie.css">
    @else
        <script>
 (function(d) {
   var config = {
     kitId: `bla2lwu`,
     scriptTimeout: 3000,
     async: true
   },
   h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
 })(document);
</script>
    @endif
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('head')
    <meta name="format-detection" content="telephone=no">
</head>

<body class="body-text leading-normal {{ $bodyClass ?? '' }}">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<div id="app">
    @yield('content')
    @include('front.partials.footer')
    @include('front.partials.navbar')
</div>
<div class="fb-customerchat"
     page_id="{{ config('facebook.page_id') }}" theme_color="#5d2b46">
</div>
@yield('bodyscripts')
<script src="{{ mix("js/app.js") }}"></script>
@include('front.partials.facebook-sdk')
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', '{{ config('services.google.analytics') }}', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>