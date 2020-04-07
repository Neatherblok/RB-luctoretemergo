@extends('layout.mainlayout')

@section('pageTitle', 'Agenda')

@section('content')
    <div class="m-agendaContent">
        <p class="text-center agenda-description mt-3">Op deze pagina treft u een overzicht met alle aankomende
            activiteiten.</p>
        @php($i=1)
        @foreach  ($activities as $activity)
            <div class="m-row-striped">
                <a id="hide{{$i}}" onclick="clickedActivity(this)" class="d-flex">
                    <div class="col-10">
                        <h5 style="color: #ff5800">
                            <strong>{{$activity->title}}</strong>
                        </h5>
                        <h6 style="color: #0065bd">
                            {{date('j', strtotime($activity->date))}}
                            {{__('agenda.months.' . date('F', strtotime($activity->date)))}}
                            {{date('Y', strtotime($activity->date))}}
                        </h6>
                    </div>
                    <div class="col-2">
                        <div class="pt-3" id="symbolActivity{{$i}}">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </a>
                <div class="details" id="details{{$i}}">
                    <ul class="list-inline">
                        <li class="font-weight-lighter">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            {{$activity->location}}
                        </li>
                        <li class="font-weight-lighter">
                            <i class="fa fa-clock" aria-hidden="true"></i>
                            van {{substr($activity->start_time,0,5)}} tot {{substr($activity->end_time,0,5)}}
                        </li>
                        <li>
                            {{ $activity->description }}
                        </li>
                    </ul>
                </div>
            </div>
            @php($i++)
        @endforeach
    </div>
@endsection

@section('customJS')
    <script src="js/mobile/agenda.js"></script>
@endsection
