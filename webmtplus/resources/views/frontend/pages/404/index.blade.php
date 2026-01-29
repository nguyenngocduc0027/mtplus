@extends('frontend.index')
@section('content')

                <!-- Error Section Start -->
                <div class="error-wrap ptb-120">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-1 ps-xl-0 text-center">
                                <img src="{{asset('frontend/assets/img/error.png')}}" alt="Iamge" class="mx-auto d-block mb-40">
                                <h3 class="fs-24 fw-extrabold text-title mt-5 mb-40">Oops! We can’t find the page you’re looking for</h3>
                                <a href="{{route('home')}}" class="btn style-one d-inline-flex flex-wrap align-items-center p-0"><span class="btn-text d-inline-block fw-semibold position-relative transition">Back To Home</span><span class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i class="ri-arrow-right-up-line"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

@endsection