@extends('layout.mainlayout')

@section('pageTitle', 'Wie zijn wij')

@section('content')
    <div class="m-agendaContent pb-3 text-center">
        <p class="mt-3">Wij zijn de Reddingsbrigade <br><strong>“Luctor et Emergo”</strong><br> uit Terneuzen.</p>
        <p>In Terneuzen en omgeving is zo ontzettend veel water dat er makkelijk iemand in terecht
            kan komen. Als je dan kunt zwemmend redden en dus geleerd en geoefend hebt om iemand uit het water te helpen
            geeft dat toch een heel fijn gevoel.</p>
        <p>Hierdoor kan je hobby, het zwemmen, tevens mensenlevens redden.</p>

        <div class="m-row-striped text-left">
            <a id="hide1" onclick="clickedActivity(this)" class="d-flex">
                <div class="col-10">
                    <h5 style="color: #ff5800">
                        <strong>Waar staan wij voor</strong>
                    </h5>
                </div>
                <div class="col-2">
                    <div id="symbolActivity1">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="details" id="details1">
                <p>Als reddingsbrigade willen wij het grote aantal verdrinkingsongevallen in Nederland proberen te
                    verminderen.</p>
            </div>
        </div>
        <div class="m-row-striped text-left">
            <a id="hide2" onclick="clickedActivity(this)" class="d-flex">
                <div class="col-10">
                    <h5 style="color: #ff5800">
                        <strong>Hoe wij opleiden</strong>
                    </h5>
                </div>
                <div class="col-2">
                    <div id="symbolActivity2">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="details" id="details2">
                <p>Wij hebben verschillende leeftijdsgroepen waarin voor een bepaald brevet zwemmend redden geoefend
                    wordt. Eerst wordt er getraind om je uithoudingsvermogen groter te maken, dit duurt natuurlijk niet
                    de hele avond, elke week een beetje meer.</p>

                <p>Vanaf het begin worden er ook verschillende onderdelen van het zwemmend redden geleerd. Hierbij moet
                    u denken aan het opduiken van ringen, een pop of groepsgenoot als drenkeling.</p>

                <p>Met elk nieuw brevet zullen je vaardigheden uitgebreider worden en zul je meer vaardigheden krijgen
                    die van een reddingbrigadier gevraagd worden.</p>

                <p>Voordat je een goed getrainde en geoefende redder bent heb je toch wel een paar jaar nodig. Wil je
                    daarna je nog verder dan zijn er met nog een EHBO diploma erbij volop kansen om aan de
                    kust als strandwacht of varend redder te werken.</p>
            </div>
        </div>
        <div class="m-row-striped text-left">
            <a id="hide3" onclick="clickedActivity(this)" class="d-flex">
                <div class="col-10">
                    <h5 style="color: #ff5800">
                        <strong>Instructeurs</strong>
                    </h5>
                </div>
                <div class="col-2">
                    <div id="symbolActivity3">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="details" id="details3">
                <p>Bij ons op de brigade zijn bijna alle instructeurs ook leden geweest die opgeleid zijn tot
                    reddingsbrigadier. Zo ben je er zeker van dat wat je geleerd krijgt ook echt het juiste is, door de
                    jarenlange ervaring die de instructeurs al hebben.</p>
                <p>Ook hebben de meeste van onze instructeurs aan het bad ook al een opleiding instructeur gevolgd,
                    zodat ze ook officieel gecertificeerd les mogen geven.</p>
                <p>Onze gecertificeerde instructeurs zijn:</p>
                <ul>
                    <li>Jan van Maren</li>
                    <li>Annemee van den Branden</li>
                    <li>Christiaan van Sabben</li>
                    <li>Vera de Bliek</li>
                    <li>Jurjan Bruins Slot</li>
                    <li>Corné Weststraete</li>
                    <li>Chantal Zahradnik</li>
                </ul>
            </div>
        </div>
        <div class="m-row-striped text-left">
            <a id="hide4" onclick="clickedActivity(this)" class="d-flex">
                <div class="col-10">
                    <h5 style="color: #ff5800">
                        <strong>Bestuur</strong>
                    </h5>
                </div>
                <div class="col-2">
                    <div id="symbolActivity4">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="details" id="details4">
                <p>Het huidige bestuur bestaat op dit moment uit:</p>
                <table class="art-geentabrand" style="width: 99%;" border="0" cellspacing="2" cellpadding="0">
                    <tbody>
                    <tr>
                        <td width="50%"><strong>Voorzitter</strong></td>
                        <td>vacant ( interim: Jurjan Bruins Slot)</td>
                    </tr>
                    <tr>
                        <td><strong>Secretaris</strong></td>
                        <td>José Tanghe</td>
                    </tr>
                    <tr>
                        <td><strong>Penningmeester</strong></td>
                        <td>vacant (interim: Ton Gardien)</td>
                    </tr>
                    <tr>
                        <td><strong>Lid</strong></td>
                        <td>Jan van Maren (Hoofd TC)</td>
                    </tr>
                    <tr>
                        <td><strong>Lid</strong></td>
                        <td>Annemee van den Branden (Evenementen)</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="m-row-striped text-left">
            <a id="hide5" onclick="clickedActivity(this)" class="d-flex">
                <div class="col-10">
                    <h5 style="color: #ff5800">
                        <strong>Technische Commissie</strong>
                    </h5>
                </div>
                <div class="col-2">
                    <div id="symbolActivity5">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="details" id="details5">
                <p>Onze technische commissie, die over de organisatie aan het bad gaat, bestaat op dit moment uit:</p>
                <table class="art-geentabrand" style="width: 99%;" border="0" cellspacing="2" cellpadding="0">
                    <tbody>
                    <tr>
                        <td width="50%"><strong>Hoofd</strong></td>
                        <td>Jan van Maren</td>
                    </tr>
                    <tr>
                        <td><strong>Secretaresse</strong></td>
                        <td>Joyce Veringmeier</td>
                    </tr>
                    <tr>
                        <td><strong>Lid</strong></td>
                        <td>Annemee van den Branden</td>
                    </tr>
                    <tr>
                        <td><strong>Lid</strong></td>
                        <td>Christiaan van Sabben</td>
                    </tr>
                    <tr>
                        <td><strong>Lid</strong></td>
                        <td>Chantal Zahradnik</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="m-row-striped text-left">
            <a id="hide6" onclick="clickedActivity(this)" class="d-flex">
                <div class="col-10">
                    <h5 style="color: #ff5800">
                        <strong>Evenementen Commissie</strong>
                    </h5>
                </div>
                <div class="col-2">
                    <div id="symbolActivity6">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="details" id="details6">
                <p>Onze evenementen commissie, die over de organisatie van activiteiten binnen de vereniging gaan,
                    bestaan op dit moment uit:</p>
                <table class="art-geentabrand" style="width: 99%;" border="0" cellspacing="2" cellpadding="0">
                    <tbody>
                    <tr>
                        <td width="50%"><strong>Hoofd Evenementen</strong></td>
                        <td>Annemee van den Branden</td>
                    </tr>
                    <tr>
                        <td><strong>Lid</strong></td>
                        <td>Jurjan Bruins Slot</td>
                    </tr>
                    </tbody>
                </table>
                <p><strong>Leden zijn per activiteit verschillend</strong></p>
            </div>
        </div>
        <div class="m-row-striped text-left">
            <a id="hide7" onclick="clickedActivity(this)" class="d-flex">
                <div class="col-10">
                    <h5 style="color: #ff5800">
                        <strong>Interesse?</strong>
                    </h5>
                </div>
                <div class="col-2">
                    <div id="symbolActivity7">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="details" id="details7">
                <p>Wil je eens komen kijken of dit zwemmend redden iets voor jou is? Kom dan eens een avondje met
                    ons
                    mee zwemmen. Hoe snel of langzaam je zwemt is niet belangrijk dat verbetert met wat oefening
                    vanzelf
                    wel.</p>
                <p>Breng direct je zwemkleding maar mee. Meld je om iets voor zeven uur aan de balie in de hal van
                    zwembad 'de Vliegende Vaart' in Terneuzen. De mevrouw die daar zit zorgt er voor dat je dezelfde
                    avond al mee kunt zwemmen.</p>
                <p>Je kunt er dan later beter over beslissen of je dit wel of niet wilt.</p>
                <p>Voor nog meer inlichtingen kun je iedere maandagavond tot half negen in het zwembad terecht of
                    even bellen.</p>
            </div>
        </div>
        <div class="m-row-striped text-left">
            <a id="hide8" onclick="clickedActivity(this)" class="d-flex">
                <div class="col-10">
                    <h5 style="color: #ff5800">
                        <strong>Contributie</strong>
                    </h5>
                </div>
                <div class="col-2">
                    <div id="symbolActivity8">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </a>
            <div class="details" id="details8">
                <p class="mb-4">De contributieregeling voor de reddingsbrigade is als volgt:</p>
                <table class="w-100">
                    <tr>
                        <td class="w-50"><u>Jeugdleden:</u></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1 kind</td>
                        <td class="text-right">€ 48,- per kwartaal</td>
                    </tr>
                    <tr>
                        <td>2 kinderen</td>
                        <td class="text-right">€ 93,- per kwartaal</td>
                    </tr>
                    <tr>
                        <td>etc...</td>
                    </tr>
                </table>
                <p><strong>Per kind extra uit hetzelfde gezin € 3,- minder per kwartaal</strong></p>
                <hr>
                <table class="w-100">
                    <tr>
                        <td class="w-50"><u>Gediplomeerde instructeurs: </u></td>
                        <td class="text-right">€ 10,- per kwartaal</td>
                    </tr>
                </table>
                <hr>
                <table class="w-100">
                    <tr>
                        <td class="w-50"><u>Seniorleden:</u></td>
                        <td class="text-right">€ 48,- per kwartaal</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('customJS')
    <script src="js/mobile/m.agenda.js"></script>
@endsection

