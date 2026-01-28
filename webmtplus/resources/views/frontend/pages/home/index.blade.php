@extends('frontend.layouts.app')
@props(['pageTitle' => __('common.home')])
@section('content')
    @include('frontend.sections.hero')
    @include('frontend.sections.about')
    <x-ui.slide-text sideText1="MTPlus..JSC" sideText2="Metasoft..Ltd" sideText3="Metasoft..Ltd" sideText4="MTPlus..JSC" />
    @include('frontend.sections.service')
    @include('frontend.sections.why-choose-us')
    @include('frontend.sections.commitment')
    <x-ui.slide-logo :array="[
        '/frontend/assets/img/brand/brand-logo-1.svg',
        '/frontend/assets/img/brand/brand-logo-2.svg',
        '/frontend/assets/img/brand/brand-logo-3.svg',
        '/frontend/assets/img/brand/brand-logo-4.svg',
        '/frontend/assets/img/brand/brand-logo-5.svg',
        '/frontend/assets/img/brand/brand-logo-6.svg',
        '/frontend/assets/img/brand/brand-logo-7.svg',
    ]" />
    @include('frontend.sections.project')
    @include('frontend.sections.team')
    @include('frontend.sections.awards')
    @include('frontend.sections.testimonial')
    <x-ui.slide-text sideText1="MTPlus..JSC" sideText2="Metasoft..Ltd" sideText3="Metasoft..Ltd" sideText4="MTPlus..JSC" />
    @include('frontend.sections.news')
    @include('frontend.sections.contact')
@endsection
