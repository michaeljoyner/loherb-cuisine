@extends('front.base', ['with_foot' => false, 'with_messenger' => false])

@section('title')
    {{ trans('bookings.seo.title') }}
@endsection

@section('head')
    @include('front.partials.ogmeta', [
        'ogTitle' => trans('bookings.seo.title'),
        'ogDescription' => trans('bookings.seo.description'),
        'ogImage' => url('/images/cuisine_facebook.jpg'),
    ])
@endsection

@section('content')
<div class="pt-12">
    <bookings-page lang="{{ $lang }}"></bookings-page>
</div>
@endsection
