@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="">
                <a class="navbar-brand" href="#">Navbar</a>
                <a class="navbar-brand" href="#">Navbar</a>

            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">MAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">WOMEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gifts</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">MAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sustainability</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ReRun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Stores</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    {{--    Banner Start--}}
    <section id="banner" class="home-banner h-[calc(100vh-90px)] relative" style="background-image: url('{{ asset('images/2.jpg') }}')">
        <div class="container h-96 py-20">
            <div class="banner-content d-flex justify-content-end flex-column h-100">
                <div class="banner-text ">
                    <h1 class="text-5xl font-semibold">Walks In A Winter Wonderland? Check.</h1>
                    <h5 class="text-base font-semibold">Stay warm and dry with the weather-ready Mizzle Collection.</h5>
                </div>
                <div class="d-flex flex-start">
                    <a class="primary-btn" href="#">Shop Men</a>
                    <a class="primary-btn" href="#">Shop Women</a>
                </div>
            </div>
        </div>
        <div class="banner-footer absolute left-0 right-0 bottom-0 bg-slate-900 text-slate-100 py-2">
            <div class="container">
                <p class="mb-0 text-base">
                    <span class="font-semibold mr-1">Find The Perfect Gift</span>
                    <span>Take Our Style Quiz to find the perfect pair.</span>
                    <a class="ml-1 text-slate-100" href="#">Take the Style Quiz</a>
                </p>
            </div>
        </div>
    </section>
    {{--Banner End--}}
    {{--best selling start--}}
    <section id="best_selling" class="home-best-selling py-5">
        <div class="container">
            <ul class="nav nav-pills mb-3 border-bottom justify-content-center" id="pills-tab" role="tablist">
                <li class="" role="presentation">
                    <button class="tab-button text-2xl" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#everyday" type="button" role="tab" aria-controls="pills-home" aria-selected="true">For Everyday</button>
                </li>
                <li class="" role="presentation">
                    <button class="tab-button" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#running" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">For Running</button>
                </li>
                <li class="" role="presentation">
                    <button class="tab-button" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#lounging" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">For Lounging</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="everyday" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <!-- Set up your HTML -->
                    <div class="owl-carousel">
                        <div class="best-product">
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div> Your Content 2</div>
                        <div> Your Content 3</div>
                    </div>
                </div>
                <div class="tab-pane fade" id="running" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">For Running</div>
                <div class="tab-pane fade" id="lounging" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">For Lounging</div>
            </div>
        </div>
    </section>
    {{--Best Selling End--}}
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:false,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    }
                }
            });
        });
    </script>
@endsection
