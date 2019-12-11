@extends('layout.mainlayout')

@section('customStyle')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endsection
@section('customJS')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-4">Agenda</h1>
                </div>
                <div class="card-body">
                    <p class="text-center agenda-description mb-0">Op deze pagina treft u een overzicht met alle door ons geplaatste agendapunten.</p>
                    <p class="text-center"><strong>Op maandagavonden staat er altijd iemand om 18:45 uur bij de balie.</strong></p>
                    <?php $i = 0 ?>
                    @foreach  ($activities as $activity)
                        <div class="row row-striped futureActivity">
                            @if($i < 1)
                                <div class="col-2 text-right">
                                    <h1 class="display-4"><span
                                            class="badge agenda-badge">{{date('j', strtotime($activity->date))}}</span>
                                    </h1>
                                    <h4>{{__('agenda.months.' . date('F', strtotime($activity->date)))}} {{date('Y', strtotime($activity->date))}}</h4>
                                </div>
                                <div class="col-10">
                                    <h3 class="text-uppercase"><strong>{{$activity->title}}</strong></h3>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-calendar"
                                                                        aria-hidden="true"></i> {{__('agenda.days.' . date('l', strtotime($activity->date)))}}
                                        </li>
                                        <li class="list-inline-item"><i class="fa fa-clock"
                                                                        aria-hidden="true"></i> {{substr($activity->start_time,0,5)}}
                                            - {{substr($activity->end_time,0,5)}}</li>
                                        <li class="list-inline-item"><i class="fa fa-location-arrow"
                                                                        aria-hidden="true"></i> {{$activity->location}}
                                        </li>
                                    </ul>
                                    <p>{{$activity->description}}</p>
                                </div>
                                <?php $i++ ?>
                            @else
                                <div class="col-2 text-right">
                                    <h6>{{__('agenda.days.' . date('l', strtotime($activity->date)))}} {{date('j', strtotime($activity->date))}} {{__('agenda.months.' . date('F', strtotime($activity->date)))}} {{date('Y', strtotime($activity->date))}}</h6>
                                </div>
                                <div class="col-10">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><strong> {{$activity->title}}</strong>
                                        </li>
                                        <li class="list-inline-item"><i class="fa fa-clock"
                                                                        aria-hidden="true"></i> {{substr($activity->start_time,0,5)}}
                                            - {{substr($activity->end_time,0,5)}}</li>
                                        <li class="list-inline-item"><i class="fa fa-location-arrow"
                                                                        aria-hidden="true"></i> {{$activity->location}}
                                        </li>
                                    </ul>
                                        <p class="description"> {{ $activity->description }}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
