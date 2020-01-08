<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center p-3" style="background-color: rgba(255,88,0,0.7); border-radius:5px">
            <h2 class="text-white mx-auto mt-2 mb-5">Ben jij die waterrat die niet genoeg van zwemmen krijgt?</h2>
            <button type="button" href="/register" class="btn register-btn js-scroll-trigger" data-toggle="modal" data-target="#dangerModal">WORD DIRECT LID</button>
        </div>

        <div class="modal fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-danger" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Let op!</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deze pagina is nog niet af!</p>
                        <p>Het kan nog even duren tot deze pagina af is, kijk anders nog even verder rond op deze site.</p>
                        <p>U kunt uw kind ook per papier aanmelden en die inleveren op de maandagavond om 18.45 aan de balie in Vliegende Vaart Terneuzen.</p>
                        <p>&nbsp;</p>
                        <p><strong>Download de papieren hieronder.</strong></p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Ga terug</button>
                        <a href="{{ asset('assets/files/aanmeldformulieren.zip') }}" download><button type=button class="btn btn-primary">Download</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
