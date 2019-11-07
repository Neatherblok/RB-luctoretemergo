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
                                    <img src="img/reddingsboei.png" class="imgWhatWeDoResize">
                                    <p class="mt-4">Zwemmend Redden</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/Theorie_Begeleiding">
                                <div class="sectionSelection">
                                    <img src="img/theorieboek.jpg" class="imgWhatWeDoResize">
                                    <p class="mt-4">Theorie Begeleiden</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/EHBO">
                                <div class="sectionSelection">
                                    <img src="img/EHBO_koffer.png" class="imgWhatWeDoResize">
                                    <p class="mt-4">Eerste Hulp</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">

            <div class="row">

                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Adres</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">Sportcentrum Vliegende Vaart</div>
                            <div class="small text-black-50">Vliegende Vaart 2, Terneuzen</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">E-mail</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">
                                <a href="#">hello@yourdomain.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="social d-flex justify-content-center">
                <a href="https://www.facebook.com/profile.php?id=100009455723964" class="mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>

        </div>
    </section>
@endsection
