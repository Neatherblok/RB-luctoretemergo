@extends('layout.mainlayout')

@section('pageTitle', 'Home')

@section('header')
    @include('layout.partials.header')
@endsection

@section('content')

    <h2 class="font-weight-bold text-uppercase text-center mt-5">Wat wij doen</h2>
    <main>
        <article>
            <img src="{{ asset('assets/img/rescue_tube.png')}}" class="w-100">
            <h2 class="mt-2">Zwemmend Redden</h2>
            <p>Op de maandagavond wordt getraind voor de diploma’s Junior Redder 1 t/m 4, Zwemmend Redder 1 t/m 4 en
                Life Saver 1 t/m 3. Dit wordt gedaan op verschillende tijdstippen.</p><p></p>
            <button type="button" class="btn info-btn js-scroll-trigger">
                <a href="/zwemmend-redden" class="text-white linkUnderlineless">Meer Informatie</a>
            </button>
        </article>
        <article>
            <img src="{{ asset('assets/img/theorieboek.png')}}" class="w-100">
            <h2 class="mt-2">Theorie Behandelen</h2>
            <p>Voor de diploma’s Life Saver 1, 2 en 3 is naast het zwemonderdeel ook een theorie-examen verplicht.
                Binnen onze brigade wordt een persoonlijke begeleiding van de theoriestof aangeboden.</p>
            <button type="button" class="btn info-btn js-scroll-trigger">
                <a href="/theorie-behandelen" class="text-white linkUnderlineless">Meer Informatie</a>
            </button>
        </article>
        <article>
            <img src="{{ asset('assets/img/EHBO_koffer.png')}}" class="w-100">
            <h2 class="mt-2">EHBO-Opleidingen</h2>
            <p>Voor de diploma’s Life Saver 2 en 3 is naast het zwemonderdeel en het theorie-examen ook een EHBO-diploma
                vereist. Wij verzorgen elk jaar een eigen EHBO-cursus om aan deze eis te kunnen voldoen.</p>
            <button type="button" class="btn info-btn js-scroll-trigger">
                <a href="/ehbo-opleidingen" class="text-white linkUnderlineless">Meer informatie</a>
            </button>
        </article>
    </main>
@endsection
