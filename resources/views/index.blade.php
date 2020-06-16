@extends('layout.mainlayout')

@section('pageTitle', 'Home')

@section('header')
    @include('layout.partials.header')
@endsection

@section('content')

    <!--what we do section-->
    <section id="what-we-do" class="what-we-do-section text-center">
        <h2 class="text-black mx-auto mb-5">Wat wij doen</h2>
            <div class="tiles-container innercontainer">
                    <div class="tile-grid">
                        <a href="/zwemmend-redden" class="tile linkUnderlineless">
                            <div class="sectionSelection">
                                <div class="tile__img" style="background-image: url({{ URL::asset('assets/img/reddingsboei.png')}})">
                                    <img src="{{ asset('assets/img/reddingsboei.png')}}">
                                </div>
                                <div class="sectionSelectionText">
                                    <p class="mt-4">Zwemmend Redden</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="tile-grid">
                        <a href="/theorie-begeleiding" class="tile linkUnderlineless">
                            <div class="sectionSelection">
                                <div class="tile__img" style="background-image: url({{ URL::asset('assets/img/theorieboek.jpg')}})">
                                    <img src="{{ asset('assets/img/theorieboek.jpg') }}">
                                </div>
                                <div class="sectionSelectionText">
                                    <p class="mt-4">Theorie Begeleiden</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="tile-grid">
                        <a href="/ehbo" class="tile linkUnderlineless">
                            <div class="sectionSelection">
                                <div class="tile__img" style="background-image: url({{ URL::asset('assets/img/EHBO_koffer.png')}})">
                                    <img src="{{ asset('assets/img/EHBO_koffer.png') }}">
                                </div>
                                <div class="sectionSelectionText">
                                    <p class="mt-4">EHBO</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
    </section>
@endsection
