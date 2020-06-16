@extends('layout.mainlayout')

@section('pageTitle', 'Contact')

@section('content')
    <div class="content">
        <div class="mt-3 ml-5 mr-5 p-3">
            <h2 class="text-uppercase font-weight-bold">Vragen of extra info?</h2>
            <p>Voor vragen of extra informatie kunt u ons altijd contacteren door een e-mail of een facebook bericht te
                sturen. Ook kunt u onze Facebook-pagina volgen voor extra informatie.</p>
            <hr>
            <h4 class="font-weight-bold">E-mail</h4>
            <p>Stuur ons een e-mailbericht, we zullen u zo snel mogelijk een reactie proberen te geven.</p>
            <a href="mailto:info@red-luctor-et-emergo.nl" class="linkUnderlineless m-contactBlocks font-weight-bold">
                <img src="{{asset('assets/img/email_icon.png')}}" style="height:3.5vh;" class="mb-2">
                <p class="text-uppercase m-0 d-inline">info@red-luctor-et-emergo.nl</p>
            </a>
            <hr>
            <h4 class="font-weight-bold">Facebook</h4>
            <p>Stuur ons een Facebookbericht, we zullen u zo snel mogelijk een reactie proberen te geven.</p>
            <a href="https://www.facebook.com/messages/t/100009455723964/"
               class="linkUnderlineless m-contactBlocks font-weight-bold">
                <img src="{{asset('assets/img/messenger-icon.jpg')}}" style="height:3.5vh;" class="mb-2">
                <p class="text-uppercase m-0 d-inline">Open messenger</p>
            </a>
            <p>Volg ook onze Facebookpagina voor extra informatie of om de laatste nieuwtjes met betrekking tot de
                Reddingsbrigade te horen.</p>
            <a href="https://www.facebook.com/profile.php?id=100009455723964"
               class="linkUnderlineless m-contactBlocks font-weight-bold">
                <img src="{{asset('assets/img/fb_logo.png')}}" style="height:3.5vh;" class="mb-2">
                <p class="text-uppercase m-0 d-inline">Open Facebook</p>
            </a>
        </div>
        <div class="mt-3 ml-5 mr-5 p-3">
            <h2 class="text-uppercase font-weight-bold">Overige gegevens</h2>
            <h4 class="font-weight-bold">Bezoekadres</h4>
            <p>Wij zwemmen bij Sportcentrum Vliegende Vaart in Terneuzen en zijn daar op maandagavonden om 18:50 uur tot 21:00 uur te vinden.</p>
            <p> Sportcentrum Vliegende Vaart <br>
                Vliegende Vaart 2<br>
                4537 DH Terneuzen
            </p>
            <hr>
            <h4 class="font-weight-bold">Postadres van secreteriaat</h4>
            <p> Celciusstraat 3 <br>
                4532 KV Terneuzen <br>
                Postbanknr: 62 34 544
            </p>
        </div>
    </div>

@endsection
