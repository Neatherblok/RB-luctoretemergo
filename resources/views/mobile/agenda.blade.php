@extends('layout.mainlayout')

@section('pageTitle', 'Agenda')

@section('content')
    <div class="m-agendaContent">
        <p class="text-center agenda-description m-3">Op deze pagina treft u een overzicht met alle aankomende
            activiteiten.</p>
        @foreach  ($activities as $activity)
            <div class="m-row-striped futureActivity">
                <ul class="list-inline">
                    <h5 style="color: #ff5800">
                        <strong>{{$activity->title}}</strong>
                    </h5>
                    <h6 style="color: #0065bd">
                        {{date('j', strtotime($activity->date))}}
                        {{__('agenda.months.' . date('F', strtotime($activity->date)))}}
                        {{date('Y', strtotime($activity->date))}}
                    </h6>
                    <li class="font-weight-lighter">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        {{$activity->location}}
                    </li>
                    <li class="description font-weight-lighter">
                        <i class="fa fa-clock" aria-hidden="true"></i>
                        van {{substr($activity->start_time,0,5)}} tot {{substr($activity->end_time,0,5)}}
                    </li>
                    <li class="description">
                        {{ $activity->description }}
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
