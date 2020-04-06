<!-- Top Navigation Menu -->
<div class="m-topnav">
    <a href="/" class="m-active m-navLogo"><img src="{{ asset('assets/img/logo_lee.png') }}" style="height:3.2rem;"></a>
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
        <a href="/agenda">Agenda</a>
        <a href="/wie-wij-zijn">Wie wij zijn</a>
        <a href="/bestuur">Bestuur</a>
        <a href="/instructeurs">Instructeurs</a>
        <a href="/diplomas">Diploma's</a>
        <a href="/statuten">Statuten</a>
        <a href="/gedragsregels">Gedragsregels</a>
        <a href="/info-nieuwe-leden">Nieuwe leden</a>
        <a href="/contributie">Contributie</a>
        <a href="/huishoudelijk-reglement">Huishoudelijk reglement</a>
        <a href="/contact">Contact</a>
    </div>
    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

@section('customStyle')
    <link href="css/mobile/m.app.css" rel="stylesheet">
@endsection

@section('customJS')
    <script src="js/mobile/m.app.js"></script>
@endsection
