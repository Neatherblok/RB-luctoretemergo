<?php
$url = $_SERVER['REQUEST_URI'];
$pagename = parse_url($url, PHP_URL_PATH);
?>

@section('content')
    <div class="content">
        <div class="container">

            <div class="card">
                <p id="message">Pagina "{{__('construction.' . $pagename)}}" is momenteel onder constructie.</p>
            </div>

        </div>
    </div>
@endsection
