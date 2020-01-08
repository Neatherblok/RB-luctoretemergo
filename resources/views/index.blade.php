@extends('layout.mainlayout')

@section('header')
    @include('layout.partials.header')
@endsection

@section('content')

    <!--what we do section-->
    <section id="what-we-do" class="what-we-do-section text-center">
        <div class="container">
            <h2 class="text-black mb-4 mx-auto">Wat wij doen</h2>
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="/Zwemmend_Redden">
                                <div class="sectionSelection">
                                    <img src="{{ asset('assets/img/reddingsboei.png') }}" class="imgWhatWeDoResize">
                                    <p class="mt-4">Zwemmend Redden</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/Theorie_Begeleiding">
                                <div class="sectionSelection">
                                    <img src="{{ asset('assets/img/theorieboek.jpg') }}" class="imgWhatWeDoResize">
                                    <p class="mt-4">Theorie Begeleiden</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/EHBO">
                                <div class="sectionSelection">
                                    <img src="{{ asset('assets/img/EHBO_koffer.png') }}" class="imgWhatWeDoResize">
                                    <p class="mt-4">Eerste Hulp</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
