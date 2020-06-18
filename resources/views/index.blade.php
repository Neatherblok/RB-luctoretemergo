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
                <a href="#zwemmend-redden" class="m-3 btn register-btn linkUnderlineless">Zwemmend redden</a>
                <a href="#theorie" class="m-3 btn register-btn linkUnderlineless">Theorie</a>
                <a href="#EHBO" class="m-3 btn register-btn linkUnderlineless">E.H.B.O.</a>
            </div>
            <div id="zwemmend-redden" class="pb-4">
                <img src="{{ asset('assets/img/rescue_tube.png')}}" class="w-25 m-auto">
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
            <p id="theorie"><br><br><br><br></p>
            <div class="card text-white" style="background-color: rgba(255,88,0,0.9); padding-left: 2rem; padding-right: 2rem;">
                <img src="{{ asset('assets/img/theorieboek.png')}}" class="w-25 h-25 m-auto">
                <h2 align="center">Theorie</h2>
                <p>In de theorie lessen worden alle technieken nogmaals behandeld maar wordt er dieper op de stof
                    ingegaan en nieuwe situaties besproken. Hierbij kan je denken aan een auto te water, wat moet je
                    doen
                    in dat geval en wat juist niet? Of de stroming van een rivier, hoe ga je hier mee om? In het zwembad
                    heb je
                    hier namelijk nooit last van. Wat betekenen nou eigenlijk die vlaggen op het strand die je wel eens
                    ziet wapperen op een warme zomerdag?
                    Dit soort situaties worden behandeld tijdens de theorie lessen. Naast de theorie-lessen die wij
                    aanbieden krijg je ook
                    een theorieboek om thuis te kunnen leren.<br>
                    De theorie is een examen onderdeel van het diploma. Bij Life Saver 1 zal de theorie op papier af
                    genomen worden, maar bij Life Saver 2 en 3 is dit mondeling met de examinator waarbij echte inzicht
                    in de situatie wordt vereist.
                </p>
            </div>
            <div id="EHBO" style="padding-top:6.5rem">
                <img src="{{ asset('assets/img/EHBO_koffer.png')}}" class="w-25 m-auto">
                <h2 align="center">E.H.B.O.</h2>
                <p>Naast de theorie over het Reddend Zwemmen zijn er ook lessen in E.H.B.O voor Life Saver 2 en 3. In
                    deze lessen krijg je zowel praktijk als theorie les. Tijdens de praktijk leer je bijvoorbeeld een
                    verband aan te leggen, de stabiele zijligging en reanimeren. Tijdens de theorie krijg je uitleg over
                    hoe ons lichaam reageert op kou en warmte, wat is nou het verschil tussen de soorten verband of wat
                    moet je doen bij iemand met een flauwte.<br>
                    Beide lessen worden in het sportcentrum de Vliegende Vaart gegeven, of in overleg met de leerlingen
                    op een andere locatie. Het E.H.B.O diploma horen de leerlingen al in bezit te hebben voor het
                    theorie en praktijk examen, maar hier helpen wij uiteraard aan mee. Deze datum wordt ruim voor de
                    theorie en praktijk examen gepland zodat een herexamen eventueel mogelijk is.
                </p>
            </div>
        </section>
    </div>
@endsection
