@extends('layout.mainlayout')

@section('content')
    <div class="content">
        <div class="contact-section">
            <div class="container">
                <div class="card">
                    <h4>Algemeen</h4>
                    <div>Reddingsbrigade Luctor et Emergo Terneuzen</div>
                    <br>
                    <h4>Secretariaat</h4>
                    <div>Celciusstraat 3</div>
                    <div>4532 KV Terneuzen</div>
                    <div class="mb-5">Postbanknr: 62 34 544</div>

                    <div class="row">

                        @include('contact_sections.location')

                        @include('contact_sections.mail')

                        @include('contact_sections.facebook')

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
