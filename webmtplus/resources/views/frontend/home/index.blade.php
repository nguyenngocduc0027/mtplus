@extends('frontend.index')
@section('content')
    <!-- Hero Section Start -->
    @include('frontend.home.sections.banner')
    <!-- Hero Section End -->

    <!-- Category Section Start -->
    @include('frontend.home.sections.category')
  
    <!-- Category Section End -->

    <!-- Move Text Start -->
    @include('frontend.home.sections.movetext')
    <!-- Move Text End -->

    <!-- About Us Section Start -->
    @include('frontend.home.sections.aboutus')
    <!-- About Us Section End -->

    <!-- Service Section Start -->
    @include('frontend.home.sections.service')
    <!-- Service Section End -->

    <!-- Why Choose Us Section Start -->
    @include('frontend.home.sections.chooseus')
    <!-- Why Choose Us Section End -->

    <!-- Project Section Start -->
   @include('frontend.home.sections.project')
    <!-- Project Section End -->

    <!-- Move Text Start -->
   @include('frontend.home.sections.movetext2')
  
    <!-- Move Text End -->

    <!-- Testimonial Section Start -->
   @include('frontend.home.sections.testimonial')
  
    <!-- Testimonial Section End -->

    <!-- CTA Section Start -->
   @include('frontend.home.sections.cta')
    <!-- CTA Section End -->

    <!-- Team Section Start -->
   @include('frontend.home.sections.team')
    <!-- Team Section End -->

    <!-- Location Section Start -->
   @include('frontend.home.sections.location')
    
    <!-- Location Section End -->

    <!-- Blog Section Start -->
    @include('frontend.home.sections.blog')
    
    <!-- Blog Section End -->
@endsection
