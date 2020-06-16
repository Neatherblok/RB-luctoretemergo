@extends('layout.mainlayout')

@section('pageTitle', 'Home')

@section('header')
    @include('layout.partials.header')
@endsection

@section('content')
    <div class="content">
        <!--what we do section-->
        <section id="what-we-do" class="what-we-do-section text-center">
            <h2 class="font-weight-bold text-uppercase mx-auto">Wat wij doen</h2>
            <div class="row justify-content-center">
                <a href="#zwemmend-redden" class="m-3 linkUnderlineless">Zwemmend redden</a>
                <p class="m-3">|</p>
                <a href="#theorie" class="m-3 linkUnderlineless">Theorie</a>
                <p class="m-3">|</p>
                <a href="#EHBO" class="m-3 linkUnderlineless">EHBO</a>
            </div>
            <div id="zwemmend-redden" class="card">
                <img src="{{ asset('assets/img/reddingsboei.png')}}" class="w-25 m-auto">
                <h2 align="center">Zwemmend redden</h2>
                <p>In Terneuzen en omgeving is zo ontzettend veel water dat er makkelijk iemand in terecht kan
                    komen. Als je dan kunt zwemmend redden en dus geleerd en geoefend hebt om iemand uit het
                    water te helpen geeft
                    dat toch een heel fijn gevoel.<br>
                    Hierdoor kan je hobby, het zwemmen, tevens mensenlevens redden.</p>
                <p>Elke maandagavond zwemmen wij in het zwembad in Sportcentrum “Vliegende Vaart” te
                    Terneuzen en trainen wij nieuwe dingen aan volgens de diploma lijn die we volgens van
                    Reddingsbrigade Nederland.
                </p>
                <p>Onze diploma lijn bestaat uit 3 verschillende niveau's, namelijk het Junior Redder (+/- 6 –
                    10 jaar), Zwemmend Redder (+/- 10 – 14 jaar) en Life Saver(+/- 14 – 18 jaar).<br>
                    Bij elk niveau wordt er een ander onderdeel behandeld van het reddend zwemmen, zo zorgen wij
                    er voor dat alle leerlingen geleidelijk aan het reddend zwemmen onder de knie krijgen.<br>
                    Junior Redder is onder verdeeld in 4 diploma's. Gedurende deze diploma's ligt de nadruk
                    voornamelijk op zelfredzaamheid. De belangrijkste regel van het reddend zwemmen is: let
                    altijd eerst op jouw eigen veiligheid voor je iemand anders wilt gaan redden.<br>
                    Het volgende niveau is Zwemmend Redder, ook dit niveau is verdeeld in 4 diploma's. Hier leer
                    je geleidelijk hoe je iemand anders kan redden vanaf de kant maar ook in het water.
                    Zowel de Junior Redder als Zwemmend Redder zijn alleen praktijk gerichte lessen.<br>
                    Wanneer je deze diploma's in jouw bezit hebt volgt de Life Saver, onderverdeeld in 3
                    diploma's. Vanaf dit punt zijn er ook theorie lessen.
                </p>
            </div>
            <div id="theorie">
                <img src="{{ asset('assets/img/theorieboek.png')}}" class="w-25 h-25 m-auto">
                <h2 align="center">Theorie</h2>
            </div>
            <div id="EHBO" class="card">
                <img src="{{ asset('assets/img/EHBO_koffer.png')}}" class="w-25 m-auto">
                <h2 align="center">EHBO</h2>
            </div>
        </section>
    </div>
@endsection
